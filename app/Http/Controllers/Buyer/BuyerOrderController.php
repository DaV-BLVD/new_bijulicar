<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerOrderController extends Controller
{
    /**
     * Show all orders placed by the logged-in buyer.
     */
    public function index()
    {
        $orders = Auth::user()
            ->orders()
            ->with('car')           // load car details in the same query
            ->latest('ordered_at')  // newest first
            ->paginate(10);

        return view('dashboard.buyer.orders.index', compact('orders'));
    }

    /**
     * Show a single order in detail.
     */
    public function show(Order $order)
    {
        // Make sure the logged-in buyer owns this order
        abort_if($order->buyer_id !== Auth::id(), 403);

        $order->load('car', 'purchase');

        return view('dashboard.buyer.orders.show', compact('order'));
    }

    /**
     * Place a new order for a car.
     */
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => ['required', 'exists:cars,id'],
            'notes'  => ['nullable', 'string', 'max:500'],
        ]);

        $car = Car::findOrFail($request->car_id);

        // Car must be available
        abort_if(!$car->isAvailable(), 422, 'This car is no longer available.');

        // Buyer cannot order their own listing
        abort_if($car->seller_id === Auth::id(), 422, 'You cannot order your own listing.');

        // Create the order — price is snapshotted from the car right now
        $order = Order::create([
            'buyer_id'    => Auth::id(),
            'car_id'      => $car->id,
            'status'      => 'pending',
            'total_price' => $car->price,
            'notes'       => $request->notes,
        ]);

        return redirect()
            ->route('buyer.orders.show', $order)
            ->with('success', 'Order placed! The seller will confirm shortly.');
    }

    /**
     * Cancel an order (only if still pending or confirmed).
     */
    public function cancel(Order $order)
    {
        // Make sure the logged-in buyer owns this order
        abort_if($order->buyer_id !== Auth::id(), 403);

        abort_if(!$order->isCancellable(), 422, 'This order can no longer be cancelled.');

        $order->update(['status' => 'cancelled']);

        return redirect()
            ->route('buyer.orders.index')
            ->with('success', 'Order cancelled successfully.');
    }
}