@extends('dashboard.buyer.layout')
@section('title', 'Order Detail')
@section('page-title', 'Order Detail')

@section('content')

    {{-- Back link --}}
    <a href="{{ route('buyer.orders.index') }}"
        class="inline-flex items-center gap-2 text-[11px] font-black text-slate-400 uppercase tracking-widest hover:text-slate-700 transition-colors mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Back to Orders
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Left: Car details --}}
        <div class="lg:col-span-2 space-y-5">

            {{-- Car card --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Vehicle</p>

                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center text-xs font-black text-slate-500 uppercase shrink-0">
                        {{ strtoupper($order->car->drivetrain) }}
                    </div>
                    <div class="flex-1">
                        <h2 class="text-xl font-black text-slate-900 uppercase italic tracking-tight">
                            {{ $order->car->displayName() }}
                        </h2>
                        <p class="text-sm text-slate-500 font-medium mt-1">
                            {{ ucfirst($order->car->condition) }} ·
                            {{ $order->car->color ?? '—' }} ·
                            {{ $order->car->location }}
                        </p>

                        {{-- Specs row --}}
                        <div class="flex flex-wrap gap-2 mt-3">
                            @if($order->car->mileage !== null)
                            <span class="text-[10px] font-black px-2.5 py-1 bg-slate-100 text-slate-600 rounded-lg uppercase tracking-wider">
                                {{ number_format($order->car->mileage) }} km
                            </span>
                            @endif
                            @if($order->car->range_km)
                            <span class="text-[10px] font-black px-2.5 py-1 bg-[#4ade80]/10 text-[#16a34a] rounded-lg uppercase tracking-wider border border-[#4ade80]/20">
                                ⚡ {{ $order->car->range_km }} km range
                            </span>
                            @endif
                            @if($order->car->battery_kwh)
                            <span class="text-[10px] font-black px-2.5 py-1 bg-slate-100 text-slate-600 rounded-lg uppercase tracking-wider">
                                {{ $order->car->battery_kwh }} kWh
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                @if($order->car->description)
                <div class="mt-5 pt-5 border-t border-slate-100">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Seller Notes</p>
                    <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ $order->car->description }}</p>
                </div>
                @endif
            </div>

            {{-- Buyer notes --}}
            @if($order->notes)
            <div class="bg-white border border-slate-200 rounded-2xl p-6">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Your Notes to Seller</p>
                <p class="text-sm text-slate-600 font-medium leading-relaxed">{{ $order->notes }}</p>
            </div>
            @endif

            {{-- Purchase record --}}
            @if($order->purchase)
            <div class="bg-[#4ade80]/10 border border-[#4ade80]/20 rounded-2xl p-6">
                <p class="text-[10px] font-black text-[#16a34a] uppercase tracking-widest mb-4">Payment Record</p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Amount Paid</p>
                        <p class="text-lg font-black text-slate-900 mt-1">{{ $order->purchase->formattedAmount() }}</p>
                    </div>
                    <div>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Method</p>
                        <p class="text-sm font-black text-slate-900 mt-1">{{ $order->purchase->paymentMethodLabel() }}</p>
                    </div>
                    @if($order->purchase->transaction_ref)
                    <div class="col-span-2">
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Transaction Ref</p>
                        <p class="text-sm font-mono text-slate-700 mt-1">{{ $order->purchase->transaction_ref }}</p>
                    </div>
                    @endif
                    <div>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Paid On</p>
                        <p class="text-sm font-black text-slate-900 mt-1">{{ $order->purchase->purchased_at->format('d M Y, h:i A') }}</p>
                    </div>
                </div>
            </div>
            @endif

        </div>

        {{-- Right: Order summary --}}
        <div class="space-y-5">

            {{-- Status card --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Order Summary</p>

                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <p class="text-xs font-bold text-slate-500">Order ID</p>
                        <p class="text-xs font-mono text-slate-700">#{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-xs font-bold text-slate-500">Placed On</p>
                        <p class="text-xs font-bold text-slate-700">{{ $order->ordered_at->format('d M Y') }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-xs font-bold text-slate-500">Seller</p>
                        <p class="text-xs font-bold text-slate-700">{{ $order->car->seller->name }}</p>
                    </div>
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                        <p class="text-xs font-bold text-slate-500">Total Price</p>
                        <p class="text-base font-black text-slate-900">{{ $order->car->formattedPrice() }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="text-xs font-bold text-slate-500">Status</p>
                        <span @class([
                            'text-[10px] font-black px-2.5 py-1 rounded-full uppercase tracking-wider',
                            'bg-yellow-100 text-yellow-700'  => $order->status === 'pending',
                            'bg-blue-100 text-blue-700'      => $order->status === 'confirmed',
                            'bg-[#4ade80]/15 text-[#16a34a]' => $order->status === 'completed',
                            'bg-red-100 text-red-600'        => $order->status === 'cancelled',
                        ])>{{ ucfirst($order->status) }}</span>
                    </div>
                </div>
            </div>

            {{-- Actions card --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6 space-y-3">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Actions</p>

                {{-- Pay now button (only for confirmed orders without a purchase) --}}
                @if($order->status === 'confirmed' && !$order->purchase)
                <a href="{{ route('buyer.purchases.create', $order) }}"
                    class="w-full flex items-center justify-center gap-2 bg-slate-900 text-white py-3 rounded-xl text-[11px] font-black uppercase italic tracking-widest hover:bg-[#16a34a] transition-all shadow-lg">
                    💳 Pay Now
                </a>
                @endif

                {{-- Write review (only after completed + no review yet) --}}
                @if($order->status === 'completed')
                    @php
                        $alreadyReviewed = auth()->user()->reviews()->where('car_id', $order->car_id)->exists();
                    @endphp
                    @if(!$alreadyReviewed)
                    <a href="{{ route('buyer.reviews.create', $order->car) }}"
                        class="w-full flex items-center justify-center gap-2 bg-slate-100 text-slate-700 py-3 rounded-xl text-[11px] font-black uppercase italic tracking-widest hover:bg-slate-200 transition-all">
                        ⭐ Write a Review
                    </a>
                    @else
                    <p class="text-center text-[11px] font-black text-[#16a34a] uppercase tracking-widest">
                        ✓ Review Submitted
                    </p>
                    @endif
                @endif

                {{-- Cancel button --}}
                @if($order->isCancellable())
                <form method="POST" action="{{ route('buyer.orders.cancel', $order) }}"
                    onsubmit="return confirm('Are you sure you want to cancel this order?')">
                    @csrf
                    @method('PATCH')
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 bg-red-50 text-red-600 border border-red-100 py-3 rounded-xl text-[11px] font-black uppercase italic tracking-widest hover:bg-red-100 transition-all">
                        Cancel Order
                    </button>
                </form>
                @endif

                {{-- No actions available --}}
                @if($order->status === 'cancelled')
                <p class="text-center text-[11px] font-black text-slate-400 uppercase tracking-widest py-2">
                    This order was cancelled
                </p>
                @endif

            </div>

        </div>
    </div>

@endsection