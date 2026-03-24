<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Order;
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
        // Make sure this order is for one of the seller's cars
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
            ->with('success', "Order confirmed. The buyer can now proceed with payment.");
    }

    /**
     * Cancel an order (seller side).
     */
    public function cancel(Order $order)
    {
        abort_if($order->car->seller_id !== Auth::id(), 403);
        abort_if(!$order->isCancellable(), 422, 'This order can no longer be cancelled.');

        $order->update(['status' => 'cancelled']);

        // If car was reserved, make it available again
        if ($order->car->status === 'reserved') {
            $order->car->update(['status' => 'available']);
        }

        return redirect()
            ->route('seller.orders.index')
            ->with('success', 'Order cancelled. The listing is available again.');
    }
}