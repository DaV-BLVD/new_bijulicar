@extends('dashboard.seller.layout')
@section('title', 'Order Detail')
@section('page-title', 'Order Detail')

@section('content')

    <a href="{{ route('seller.orders.index') }}"
        class="inline-flex items-center gap-2 text-[11px] font-black text-slate-400 uppercase tracking-widest hover:text-slate-700 transition-colors mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Back to Orders
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Left: Car + buyer details --}}
        <div class="lg:col-span-2 space-y-5">

            {{-- Car card --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Vehicle</p>

                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl overflow-hidden shrink-0 flex items-center justify-center">
                        @if($order->car->primaryImage ?? false)
                            <img src="{{ $order->car->primaryImage->url() }}" class="w-full h-full object-cover" alt="{{ $order->car->displayName() }}">
                        @else
                            <span class="text-2xl opacity-20">⚡</span>
                        @endif
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
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span class="text-[10px] font-black px-2.5 py-1 bg-slate-100 text-slate-600 rounded-lg uppercase tracking-wider">
                                {{ number_format($order->car->mileage) }} km
                            </span>
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
            </div>

            {{-- Buyer info --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Buyer</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center font-black text-slate-500 text-lg uppercase shrink-0">
                        {{ substr($order->buyer->name, 0, 1) }}
                    </div>
                    <div>
                        <p class="text-sm font-black text-slate-900">{{ $order->buyer->name }}</p>
                        <p class="text-[11px] text-slate-400 font-medium mt-0.5">{{ $order->buyer->email }}</p>
                    </div>
                </div>
                @if($order->notes)
                <div class="mt-4 pt-4 border-t border-slate-100">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Buyer's Note</p>
                    <p class="text-sm text-slate-600 font-medium leading-relaxed italic">"{{ $order->notes }}"</p>
                </div>
                @endif
            </div>

            {{-- Payment record --}}
            @if($order->purchase)
            <div class="bg-[#4ade80]/10 border border-[#4ade80]/20 rounded-2xl p-6">
                <p class="text-[10px] font-black text-[#16a34a] uppercase tracking-widest mb-4">Payment Received</p>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Amount</p>
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

        {{-- Right: Order summary + actions --}}
        <div class="space-y-5">

            {{-- Summary --}}
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
                        <p class="text-xs font-bold text-slate-500">Buyer</p>
                        <p class="text-xs font-bold text-slate-700">{{ $order->buyer->name }}</p>
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

            {{-- Actions --}}
            <div class="bg-white border border-slate-200 rounded-2xl p-6 space-y-3">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2">Actions</p>

                {{-- Confirm button — only for pending orders --}}
                @if($order->status === 'pending')
                <form method="POST" action="{{ route('seller.orders.confirm', $order) }}">
                    @csrf
                    @method('PATCH')
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 bg-slate-900 text-white py-3 rounded-xl text-[11px] font-black uppercase italic tracking-widest hover:bg-[#16a34a] transition-all shadow-lg">
                        ✓ Confirm Order
                    </button>
                </form>
                <p class="text-center text-[10px] font-medium text-slate-400">
                    Confirming allows the buyer to proceed with payment.
                </p>
                @endif

                {{-- Waiting for payment --}}
                @if($order->status === 'confirmed' && !$order->purchase)
                <div class="w-full flex items-center justify-center gap-2 bg-blue-50 text-blue-700 border border-blue-100 py-3 rounded-xl text-[11px] font-black uppercase italic tracking-widest">
                    ⏳ Waiting for Payment
                </div>
                @endif

                {{-- Completed --}}
                @if($order->status === 'completed')
                <div class="w-full flex items-center justify-center gap-2 bg-[#4ade80]/10 text-[#16a34a] border border-[#4ade80]/20 py-3 rounded-xl text-[11px] font-black uppercase italic tracking-widest">
                    ✓ Sale Completed
                </div>
                @endif

                {{-- Cancel button --}}
                @if($order->isCancellable())
                <form method="POST" action="{{ route('seller.orders.cancel', $order) }}"
                    onsubmit="return confirm('Cancel this order? The listing will become available again.')">
                    @csrf
                    @method('PATCH')
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 bg-red-50 text-red-600 border border-red-100 py-3 rounded-xl text-[11px] font-black uppercase italic tracking-widest hover:bg-red-100 transition-all">
                        Cancel Order
                    </button>
                </form>
                @endif

                {{-- Cancelled state --}}
                @if($order->status === 'cancelled')
                <p class="text-center text-[11px] font-black text-slate-400 uppercase tracking-widest py-2">
                    This order was cancelled
                </p>
                @endif

                {{-- Edit listing link --}}
                <a href="{{ route('seller.cars.edit', $order->car) }}"
                    class="w-full flex items-center justify-center gap-2 bg-slate-50 text-slate-600 border border-slate-200 py-3 rounded-xl text-[11px] font-black uppercase italic tracking-widest hover:bg-slate-100 transition-all">
                    Edit Listing
                </a>

            </div>

            {{-- Info box for pending --}}
            @if($order->status === 'pending')
            <div class="bg-slate-900 rounded-2xl p-5">
                <p class="text-[10px] font-black text-[#4ade80] uppercase tracking-widest mb-3">⚡ Next Steps</p>
                <ul class="space-y-2">
                    <li class="text-xs font-medium text-slate-400 flex items-start gap-2">
                        <span class="text-[#4ade80] mt-0.5">→</span>
                        Review the buyer's details above.
                    </li>
                    <li class="text-xs font-medium text-slate-400 flex items-start gap-2">
                        <span class="text-[#4ade80] mt-0.5">→</span>
                        Click Confirm Order to unlock payment for the buyer.
                    </li>
                    <li class="text-xs font-medium text-slate-400 flex items-start gap-2">
                        <span class="text-[#4ade80] mt-0.5">→</span>
                        Or cancel if you cannot fulfil this order.
                    </li>
                </ul>
            </div>
            @endif

        </div>
    </div>

@endsection