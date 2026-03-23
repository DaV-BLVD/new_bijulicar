<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerPurchaseController extends Controller
{
    /**
     * Show all completed purchases by the logged-in buyer.
     */
    public function index()
    {
        $purchases = Auth::user()
            ->purchases()
            ->with('order.car')     // load order → car in one query
            ->latest('purchased_at')
            ->paginate(10);

        return view('dashboard.buyer.purchases.index', compact('purchases'));
    }

    /**
     * Show the payment form for a confirmed order.
     */
    public function create(Order $order)
    {
        // Only the buyer who placed this order can pay for it
        abort_if($order->buyer_id !== Auth::id(), 403);

        // Can only pay for a confirmed order
        abort_if($order->status !== 'confirmed', 422, 'This order is not ready for payment yet.');

        // Cannot pay if already purchased
        abort_if($order->purchase()->exists(), 422, 'This order has already been paid.');

        $order->load('car');

        return view('dashboard.buyer.purchases.create', compact('order'));
    }

    /**
     * Save the payment and mark the order as completed.
     */
    public function store(Request $request, Order $order)
    {
        // Same security checks as create()
        abort_if($order->buyer_id !== Auth::id(), 403);
        abort_if($order->status !== 'confirmed', 422, 'This order is not ready for payment yet.');
        abort_if($order->purchase()->exists(), 422, 'This order has already been paid.');

        $request->validate([
            'payment_method'  => ['required', 'in:cash,bank_transfer,emi,other'],
            'transaction_ref' => ['nullable', 'string', 'max:255'],
        ]);

        // Create the purchase record
        Purchase::create([
            'order_id'        => $order->id,
            'buyer_id'        => Auth::id(),
            'payment_method'  => $request->payment_method,
            'payment_status'  => 'paid',
            'amount_paid'     => $order->total_price,
            'transaction_ref' => $request->transaction_ref,
        ]);

        // Mark the order as completed
        $order->update(['status' => 'completed']);

        // Mark the car as sold so no one else can order it
        $order->car->update(['status' => 'sold']);

        return redirect()
            ->route('buyer.purchases.index')
            ->with('success', 'Payment confirmed! The car is now yours.');
    }
}