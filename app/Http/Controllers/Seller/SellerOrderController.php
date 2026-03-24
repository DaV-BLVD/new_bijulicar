<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerOrderController extends Controller
{
    /**
     * Show all orders placed on this seller's cars.
     */
    public function index()
    {
        $orders = Order::whereHas('car', function ($q) {
                $q->where('seller_id', Auth::id());
            })
            ->with('car', 'buyer')
            ->latest('ordered_at')
            ->paginate(10);

        return view('dashboard.seller.orders.index', compact('orders'));
    }

    /**
     * Show a single order in detail.
     */
    public function show(Order $order)
    {
        abort_if($order->car->seller_id !== Auth::id(), 403);

        $order->load('car', 'buyer', 'purchase');

        return view('dashboard.seller.orders.show', compact('order'));
    }

    /**
     * Confirm a pending order.
     */
    public function confirm(Order $order)
    {
        abort_if($order->car->seller_id !== Auth::id(), 403);
        abort_if($order->status !== 'pending', 422, 'Only pending orders can be confirmed.');

        $order->update(['status' => 'confirmed']);

        return redirect()
            ->route('seller.orders.show', $order)
            ->with('success', 'Order confirmed. Once you receive payment, mark it as completed.');
    }

    /**
     * Show the completion form where seller records payment details.
     */
    public function completeForm(Order $order)
    {
        abort_if($order->car->seller_id !== Auth::id(), 403);
        abort_if($order->status !== 'confirmed', 422, 'Only confirmed orders can be marked as completed.');
        abort_if($order->purchase()->exists(), 422, 'This order is already completed.');

        $order->load('car', 'buyer');

        return view('dashboard.seller.orders.complete', compact('order'));
    }

    /**
     * Save payment details and mark the order as completed.
     */
    public function complete(Request $request, Order $order)
    {
        abort_if($order->car->seller_id !== Auth::id(), 403);
        abort_if($order->status !== 'confirmed', 422, 'Only confirmed orders can be marked as completed.');
        abort_if($order->purchase()->exists(), 422, 'This order is already completed.');

        $request->validate([
            'payment_method'  => ['required', 'in:cash,bank_transfer,emi,other'],
            'amount_paid'     => ['required', 'integer', 'min:1'],
            'transaction_ref' => ['nullable', 'string', 'max:255'],
            'remarks'         => ['nullable', 'string', 'max:500'],
        ]);

        // Create the purchase record from the seller side
        Purchase::create([
            'order_id'        => $order->id,
            'buyer_id'        => $order->buyer_id,
            'payment_method'  => $request->payment_method,
            'payment_status'  => 'paid',
            'amount_paid'     => $request->amount_paid,
            'transaction_ref' => $request->transaction_ref,
            'remarks'         => $request->remarks,
        ]);

        // Mark order as completed
        $order->update(['status' => 'completed']);

        // Reduce stock — auto-marks car as sold if stock hits 0
        $order->car->decrementStock();

        return redirect()
            ->route('seller.orders.show', $order)
            ->with('success', 'Order marked as completed. Payment recorded successfully.');
    }

    /**
     * Cancel an order (seller side).
     */
    public function cancel(Order $order)
    {
        abort_if($order->car->seller_id !== Auth::id(), 403);
        abort_if(!$order->isCancellable(), 422, 'This order can no longer be cancelled.');

        $order->update(['status' => 'cancelled']);

        if ($order->car->status === 'reserved') {
            $order->car->update(['status' => 'available']);
        }

        return redirect()
            ->route('seller.orders.index')
            ->with('success', 'Order cancelled. The listing is available again.');
    }
}