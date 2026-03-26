@extends('frontend.app')

@section('content')
    {{-- Removed mt-4 and rounded corners to let it bleed to the top and edges --}}



    <section class="relative h-screen w-full overflow-hidden bg-slate-900">
        <div class="swiper mySwiper h-full w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative">
                    {{-- <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&q=80&w=2070"
                        class="w-full h-full object-cover brightness-[0.4]" alt="EV Car 1"> --}}

                    @if ($banners)
                        <img src="{{ asset('storage/' . $banners->image1) }}"
                            class="w-full h-full object-cover brightness-[0.4]" alt="EV Car 1">
                    @endif

                    {{-- Added pt-20 to ensure content doesn't get hidden behind the floating navbar --}}
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 pt-20">
                        <h1 class="text-white text-5xl md:text-7xl font-black tracking-tighter mb-4 uppercase italic">
                            Find Your <span class="text-[#4ade80]">Perfect</span> Vehicle
                        </h1>
                        <p class="text-slate-200 text-lg md:text-2xl max-w-4xl mb-10 font-medium">
                            Discover the largest marketplace for all types of vehicles on BijuliCar.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="{{ route('marketplace') }}"
                                class="bg-[#4ade80] text-black px-10 py-4 rounded-xl font-bold hover:bg-[#22c55e] transition-all transform hover:scale-105 shadow-lg shadow-green-500/20 inline-block text-center">
                                Browse Marketplace
                            </a>
                            <a href="{{ route('loan_calculator') }}"
                                class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-10 py-4 rounded-xl font-bold hover:bg-white/20 transition-all inline-block text-center">
                                Calculate Loan
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    {{-- <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?auto=format&fit=crop&q=80&w=2071"
                        class="w-full h-full object-cover brightness-[0.4]" alt="EV Car 2"> --}}

                    @if ($banners)
                        <img src="{{ asset('storage/' . $banners->image2) }}"
                            class="w-full h-full object-cover brightness-[0.4]" alt="EV Car 2">
                    @endif
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 pt-20">
                        <h1 class="text-white text-5xl md:text-8xl font-black tracking-tighter mb-4 uppercase italic">
                            Smart Comparisons
                        </h1>
                        <p class="text-slate-200 text-lg md:text-2xl max-w-2xl mb-10 font-medium">
                            Side-by-side technical specs for every major electric vehicle on the market.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="{{ route('compare_cars') }}"
                                class="bg-[#4ade80] text-black px-10 py-4 rounded-xl font-bold hover:bg-[#22c55e] transition-all transform hover:scale-105 shadow-lg shadow-green-500/20 inline-block text-center">
                                Start Comparing
                            </a>
                            <a href="{{ route('news') }}"
                                class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-10 py-4 rounded-xl font-bold hover:bg-white/20 transition-all inline-block text-center">
                                Get News
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    {{-- <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=2071"
                        class="w-full h-full object-cover brightness-[0.4]" alt="EV Car 3"> --}}
                    @if ($banners)
                        <img src="{{ asset('storage/' . $banners->image3) }}"
                            class="w-full h-full object-cover brightness-[0.4]" alt="EV Car 3">
                    @endif
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 pt-20">
                        <h1 class="text-white text-5xl md:text-8xl font-black tracking-tighter mb-4 uppercase italic">
                            Find Your Type
                        </h1>
                        <p class="text-slate-200 text-lg md:text-2xl max-w-2xl mb-10 font-medium">
                            All types of Cars available - Electric, Hybrid, and Traditional Combustion. Find the one that
                            fits your lifestyle and budget.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="{{ route('login') }}"
                                class="bg-[#4ade80] text-black px-10 py-4 rounded-xl font-bold hover:bg-[#22c55e] transition-all transform hover:scale-105 shadow-lg shadow-green-500/20 inline-block text-center">
                                Log In
                            </a>

                            <a href="{{ route('register') }}"
                                class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-10 py-4 rounded-xl font-bold hover:bg-white/20 transition-all inline-block text-center">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination !bottom-10"></div>
            <div class="swiper-button-next !text-white !right-10 after:!text-xl hidden md:flex hover:scale-110 transition">
            </div>
            <div class="swiper-button-prev !text-white !left-10 after:!text-xl hidden md:flex hover:scale-110 transition">
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-16">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-[2px] w-8 bg-[#4ade80]"></span>
                    <span class="text-xs font-bold tracking-[0.3em] uppercase text-slate-400">Inventory
                        Classification</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-black tracking-tighter text-slate-900 uppercase italic">
                    The <span class="text-[#4ade80]">Bijulicar</span> Fleet
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div
                    class="group relative bg-white rounded-[2.5rem] p-10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_-12px_rgba(0,0,0,0.12)] transition-all duration-500 border border-transparent hover:border-slate-100 flex flex-col justify-between h-full">
                    <div>
                        <div
                            class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-[#4ade80]/10 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 text-slate-900 group-hover:text-[#4ade80] transition-colors" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4 tracking-tight">Full Electric</h3>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium">
                            Next-generation lithium propulsion. Engineered for maximum torque and zero-emission urban
                            efficiency.
                        </p>
                    </div>

                    <div class="mt-10 flex items-center justify-between border-t border-slate-50 pt-8">
                        <div>
                            <span class="block text-[10px] uppercase tracking-widest text-slate-400 font-bold">Status</span>
                            <span class="text-sm font-black text-slate-900 italic">04 Available</span>
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-slate-900 flex items-center justify-center text-white transform group-hover:scale-110 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2.5">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative bg-white rounded-[2.5rem] p-10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_-12px_rgba(0,0,0,0.12)] transition-all duration-500 border border-transparent hover:border-slate-100 flex flex-col justify-between h-full">
                    <div>
                        <div
                            class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-[#4ade80]/10 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 text-slate-900 group-hover:text-[#4ade80] transition-colors" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 6v6l4 2" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4 tracking-tight">Hybrid Drive</h3>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium">
                            Dual-core synchronization. High-efficiency combustion paired with responsive electric power.
                        </p>
                    </div>

                    <div class="mt-10 flex items-center justify-between border-t border-slate-50 pt-8">
                        <div>
                            <span class="block text-[10px] uppercase tracking-widest text-slate-400 font-bold">Status</span>
                            <span class="text-sm font-black text-slate-900 italic">02 Available</span>
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-slate-900 flex items-center justify-center text-white transform group-hover:scale-110 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2.5">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative bg-white rounded-[2.5rem] p-10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60_12px_rgba(0,0,0,0.12)] transition-all duration-500 border border-transparent hover:border-slate-100 flex flex-col justify-between h-full">
                    <div>
                        <div
                            class="w-14 h-14 bg-slate-50 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-[#4ade80]/10 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-6 h-6 text-slate-900 group-hover:text-[#4ade80] transition-colors" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 22V8a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14M9 22V12h6v10M12 2v4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4 tracking-tight">Classic Combustion</h3>
                        <p class="text-slate-500 text-sm leading-relaxed font-medium">
                            Proven mechanical reliability. Refined internal combustion engines for long-distance travel.
                        </p>
                    </div>

                    <div class="mt-10 flex items-center justify-between border-t border-slate-50 pt-8">
                        <div>
                            <span
                                class="block text-[10px] uppercase tracking-widest text-slate-400 font-bold">Status</span>
                            <span class="text-sm font-black text-slate-900 italic">02 Available</span>
                        </div>
                        <div
                            class="w-12 h-12 rounded-full bg-slate-900 flex items-center justify-center text-white transform group-hover:scale-110 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2.5">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-10 bg-[#0f172a]">
        <div class="max-w-9xl mx-auto px-6">

            <div
                class="relative overflow-hidden rounded-[3rem] bg-white/5 border border-white/10 backdrop-blur-sm px-8 py-16">

                <div class="absolute -top-24 -right-24 w-64 h-64 bg-[#4ade80]/10 blur-[100px] rounded-full"></div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-12 relative z-10">

                    <div class="flex flex-col items-center text-center group px-4">
                        <div class="mb-5 text-[#4ade80] group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </div>
                        <h4 class="text-4xl md:text-5xl font-black tracking-tighter text-white mb-2">2,547</h4>
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#4ade80] animate-pulse"></span>
                            <p class="text-[10px] uppercase tracking-[0.3em] font-bold text-slate-400">Active Listings</p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center text-center group px-4 border-l border-white/10">
                        <div class="mb-5 text-[#4ade80] group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h4 class="text-4xl md:text-5xl font-black tracking-tighter text-white mb-2">156</h4>
                        <p class="text-[10px] uppercase tracking-[0.3em] font-bold text-slate-400">Verified Dealers</p>
                    </div>

                    <div class="flex flex-col items-center text-center group px-4 border-l border-white/10">
                        <div class="mb-5 text-[#4ade80] group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                            </svg>
                        </div>
                        <h4 class="text-4xl md:text-5xl font-black tracking-tighter text-white mb-2">12,890</h4>
                        <p class="text-[10px] uppercase tracking-[0.3em] font-bold text-slate-400">Happy Customers</p>
                    </div>

                    <div class="flex flex-col items-center text-center group px-4 border-l border-white/10">
                        <div class="mb-5 text-[#4ade80] group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="8" r="7" />
                                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88" />
                            </svg>
                        </div>
                        <h4 class="text-4xl md:text-5xl font-black tracking-tighter text-white mb-2">8+</h4>
                        <p class="text-[10px] uppercase tracking-[0.3em] font-bold text-slate-400">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── Sponsored banners (home placement) ────────────────────────── --}}
    @if (isset($homeAds) && $homeAds->isNotEmpty())
        <section class="py-10 bg-slate-50">
            <div class="max-w-7xl mx-auto px-6 space-y-5">
                @foreach ($homeAds as $ad)
                    @php $target = $ad->link_url ?: ($ad->car_id ? route('marketplace') : null); @endphp
                    <div class="relative rounded-2xl overflow-hidden border border-slate-200 shadow-sm group bg-slate-900">
                        <div class="flex flex-col md:flex-row min-h-[200px]">

                            {{-- Left: text content --}}
                            <div class="flex-1 flex flex-col justify-center px-8 py-8 md:py-10 z-10">
                                <p class="text-[9px] font-black text-purple-400 uppercase tracking-widest mb-3">Sponsored
                                </p>
                                <h3
                                    class="text-2xl md:text-3xl font-black text-white uppercase italic tracking-tight leading-tight mb-3">
                                    {{ $ad->title }}
                                </h3>
                                @if ($ad->description)
                                    <p class="text-slate-400 text-sm font-medium mb-4 max-w-md leading-relaxed">
                                        {{ $ad->description }}</p>
                                @endif

                                {{-- Car details if linked --}}
                                @if ($ad->car)
                                    <div class="flex flex-wrap gap-2 mb-5">
                                        <span
                                            class="text-[10px] font-black px-3 py-1.5 bg-white/10 text-white rounded-lg uppercase tracking-wider">
                                            {{ $ad->car->displayName() }}
                                        </span>
                                        <span
                                            class="text-[10px] font-black px-3 py-1.5 bg-[#4ade80]/20 text-[#4ade80] rounded-lg uppercase tracking-wider border border-[#4ade80]/20">
                                            {{ $ad->car->formattedPrice() }}
                                        </span>
                                        <span
                                            class="text-[10px] font-black px-3 py-1.5 bg-white/10 text-white rounded-lg uppercase tracking-wider">
                                            {{ strtoupper($ad->car->drivetrain) }}
                                        </span>
                                        @if ($ad->car->range_km)
                                            <span
                                                class="text-[10px] font-black px-3 py-1.5 bg-white/10 text-white rounded-lg uppercase tracking-wider">
                                                {{ $ad->car->range_km }} km range
                                            </span>
                                        @endif
                                    </div>
                                @endif

                                @if ($target)
                                    <a href="{{ $target }}"
                                        class="self-start px-6 py-2.5 bg-white text-slate-900 rounded-xl text-[11px] font-black uppercase italic tracking-widest hover:bg-[#4ade80] transition-all">
                                        {{ $ad->car ? 'View Listing →' : 'Learn More →' }}
                                    </a>
                                @endif
                            </div>

                            {{-- Right: banner image --}}
                            @if ($ad->image)
                                <div class="md:w-2/5 shrink-0 relative min-h-[180px] md:min-h-0">
                                    <img src="{{ Storage::url($ad->image) }}" alt="{{ $ad->title }}"
                                        class="w-full h-full object-cover group-hover:scale-[1.02] transition-transform duration-700 absolute inset-0">
                                    <div
                                        class="hidden md:block absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-slate-900 to-transparent z-10">
                                    </div>
                                </div>
                            @else
                                <div class="hidden md:block md:w-1/4 shrink-0 opacity-5"
                                    style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px;">
                                </div>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-20 gap-8">
                <div class="max-w-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="h-[2px] w-8 bg-[#4ade80]"></span>
                        <span class="text-[10px] uppercase tracking-[0.4em] text-slate-400 font-bold">The Platform
                            Advantage</span>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black tracking-tighter text-slate-900 uppercase italic">
                        Why <span class="text-slate-300">BijuliCar?</span>
                    </h2>
                </div>
                <p class="text-slate-500 text-sm max-w-xs leading-relaxed font-medium">
                    The most comprehensive ecosystem for high-performance vehicle trading in the region.
                </p>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-slate-200 border border-slate-200 rounded-[3rem] overflow-hidden shadow-2xl shadow-slate-200/50">

                <div class="group bg-white p-10 transition-all duration-500 hover:bg-slate-50">
                    <div
                        class="w-12 h-12 rounded-xl bg-slate-50 flex items-center justify-center mb-10 group-hover:bg-[#4ade80]/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 text-slate-400 group-hover:text-[#4ade80] transition-colors" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21V12.914c0-.597-.237-1.17-.659-1.591L3.659 5.891A2.25 2.25 0 013 4.3v-1.044c0-.54.384-1.006.917-1.096A48.33 48.33 0 0112 3z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-extrabold text-slate-900 uppercase tracking-tight mb-4 italic">Smart Search
                    </h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Advanced algorithmic filters covering EV range, technical specs, and powertrain efficiency.
                    </p>
                </div>

                <div class="group bg-white p-10 transition-all duration-500 hover:bg-slate-50">
                    <div
                        class="w-12 h-12 rounded-xl bg-slate-50 flex items-center justify-center mb-10 group-hover:bg-[#4ade80]/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 text-slate-400 group-hover:text-[#4ade80] transition-colors" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-extrabold text-slate-900 uppercase tracking-tight mb-4 italic">Comparison</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Side-by-side technical teardowns. Compare up to 3 vehicles with forensic data accuracy.
                    </p>
                </div>

                <div class="group bg-white p-10 transition-all duration-500 hover:bg-slate-50">
                    <div
                        class="w-12 h-12 rounded-xl bg-slate-50 flex items-center justify-center mb-10 group-hover:bg-[#4ade80]/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 text-slate-400 group-hover:text-[#4ade80] transition-colors" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25s-7.5-4.108-7.5-11.25a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-extrabold text-slate-900 uppercase tracking-tight mb-4 italic">Geo-Search</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Instantly locate charging infrastructure, service hubs, and nearby dealership inventory.
                    </p>
                </div>

                <div class="group bg-white p-10 transition-all duration-500 hover:bg-slate-50">
                    <div
                        class="w-12 h-12 rounded-xl bg-slate-50 flex items-center justify-center mb-10 group-hover:bg-[#4ade80]/10 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 text-slate-400 group-hover:text-[#4ade80] transition-colors" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-extrabold text-slate-900 uppercase tracking-tight mb-4 italic">Auto News</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Real-time market insights and deep-dive reviews across the global automotive landscape.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-10 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-2 h-2 rounded-full bg-[#4ade80] animate-pulse"></span>
                        <span class="text-[10px] uppercase tracking-[0.3em] text-slate-400 font-bold">Marketplace
                            Live</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black tracking-tighter text-slate-900 uppercase italic">
                        Recently <span class="text-slate-300">Added</span>
                    </h2>
                </div>
                <a href="{{ route('marketplace') }}"
                    class="group flex items-center gap-3 text-sm font-bold uppercase tracking-widest text-slate-900">
                    Explore All Inventory
                    <span
                        class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">→</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="group relative bg-white rounded-[2.5rem] overflow-hidden shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_-12px_rgba(0,0,0,0.12)] transition-all duration-500">
                    <div class="relative h-64 overflow-hidden bg-slate-200">
                        <div class="absolute top-5 left-5 z-10 flex gap-2">
                            <span
                                class="bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">Hybrid</span>
                            <span
                                class="bg-[#4ade80] text-black text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">Premium
                                Dealer</span>
                        </div>
                        <img src="{{ asset('images/car1.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            alt="BYD Dolphin">
                        <div
                            class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg flex items-center gap-2 shadow-sm">
                            <span class="text-slate-400 text-xs font-bold">👁 43</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-1">Kathmandu
                                </p>
                                <h3 class="text-2xl font-black text-slate-900 tracking-tight italic uppercase">2023 BYD
                                    Dolphin</h3>
                            </div>
                            <p class="text-xl font-black text-[#4ade80]">NRs 2.88M</p>
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="bg-slate-50 p-3 rounded-xl border border-slate-100 text-center">
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Mileage</p>
                                <p class="text-sm font-bold text-slate-900">44 km</p>
                            </div>
                            <div class="bg-slate-50 p-3 rounded-xl border border-slate-100 text-center">
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Battery</p>
                                <p class="text-sm font-bold text-slate-900">100% Health</p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="flex-[2] bg-slate-900 text-white py-4 rounded-2xl font-bold text-sm hover:bg-black transition-all active:scale-95">
                                View Details
                            </button>
                            <button
                                class="flex-1 border border-slate-200 text-slate-900 py-4 rounded-2xl font-bold text-sm hover:bg-slate-50 transition-all">
                                Compare
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="group relative bg-white rounded-[2.5rem] overflow-hidden shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_-12px_rgba(0,0,0,0.12)] transition-all duration-500">
                    <div class="relative h-64 overflow-hidden bg-slate-200">
                        <div class="absolute top-5 left-5 z-10 flex gap-2">
                            <span
                                class="bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">Hybrid</span>
                            <span
                                class="bg-[#4ade80] text-black text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">Premium
                                Dealer</span>
                        </div>
                        <img src="{{ asset('images/car2.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            alt="BYD Dolphin">
                        <div
                            class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg flex items-center gap-2 shadow-sm">
                            <span class="text-slate-400 text-xs font-bold">👁 43</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-1">Kathmandu
                                </p>
                                <h3 class="text-2xl font-black text-slate-900 tracking-tight italic uppercase">2023 BYD
                                    Dolphin</h3>
                            </div>
                            <p class="text-xl font-black text-[#4ade80]">NRs 2.88M</p>
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="bg-slate-50 p-3 rounded-xl border border-slate-100 text-center">
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Mileage</p>
                                <p class="text-sm font-bold text-slate-900">44 km</p>
                            </div>
                            <div class="bg-slate-50 p-3 rounded-xl border border-slate-100 text-center">
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Battery</p>
                                <p class="text-sm font-bold text-slate-900">100% Health</p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="flex-[2] bg-slate-900 text-white py-4 rounded-2xl font-bold text-sm hover:bg-black transition-all active:scale-95">
                                View Details
                            </button>
                            <button
                                class="flex-1 border border-slate-200 text-slate-900 py-4 rounded-2xl font-bold text-sm hover:bg-slate-50 transition-all">
                                Compare
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="group relative bg-white rounded-[2.5rem] overflow-hidden shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_30px_60px_-12px_rgba(0,0,0,0.12)] transition-all duration-500">
                    <div class="relative h-64 overflow-hidden bg-slate-200">
                        <div class="absolute top-5 left-5 z-10 flex gap-2">
                            <span
                                class="bg-black/60 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">Hybrid</span>
                            <span
                                class="bg-[#4ade80] text-black text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">Premium
                                Dealer</span>
                        </div>
                        <img src="{{ asset('images/car3.jpg') }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            alt="BYD Dolphin">
                        <div
                            class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg flex items-center gap-2 shadow-sm">
                            <span class="text-slate-400 text-xs font-bold">👁 43</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest mb-1">Kathmandu
                                </p>
                                <h3 class="text-2xl font-black text-slate-900 tracking-tight italic uppercase">2023 BYD
                                    Dolphin</h3>
                            </div>
                            <p class="text-xl font-black text-[#4ade80]">NRs 2.88M</p>
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="bg-slate-50 p-3 rounded-xl border border-slate-100 text-center">
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Mileage</p>
                                <p class="text-sm font-bold text-slate-900">44 km</p>
                            </div>
                            <div class="bg-slate-50 p-3 rounded-xl border border-slate-100 text-center">
                                <p class="text-[10px] text-slate-400 font-bold uppercase">Battery</p>
                                <p class="text-sm font-bold text-slate-900">100% Health</p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="flex-[2] bg-slate-900 text-white py-4 rounded-2xl font-bold text-sm hover:bg-black transition-all active:scale-95">
                                View Details
                            </button>
                            <button
                                class="flex-1 border border-slate-200 text-slate-900 py-4 rounded-2xl font-bold text-sm hover:bg-slate-50 transition-all">
                                Compare
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div
                class="relative overflow-hidden bg-[#0f172a] rounded-[3rem] px-8 py-16 text-center shadow-2xl shadow-slate-900/20">

                <div class="absolute top-0 left-0 w-full h-full">
                    <div
                        class="absolute -top-1/2 -left-1/4 w-[150%] h-[200%] bg-[radial-gradient(circle_at_center,_rgba(74,222,128,0.08)_0%,_transparent_50%)]">
                    </div>
                    <div class="absolute inset-0 opacity-[0.03]"
                        style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px;">
                    </div>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto">
                    <div class="flex items-center justify-center gap-3 mb-8">
                        <span class="h-[1px] w-12 bg-[#4ade80]"></span>
                        <span class="text-[10px] uppercase tracking-[0.4em] text-[#4ade80] font-bold">Evolution of
                            Driving</span>
                        <span class="h-[1px] w-12 bg-[#4ade80]"></span>
                    </div>

                    <h2 class="text-4xl md:text-6xl font-black tracking-tight text-white uppercase italic mb-6">
                        Ready to Find Your <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-slate-500">Next
                            Vehicle?</span>
                    </h2>

                    <p class="text-slate-400 text-lg md:text-xl font-medium mb-12 leading-relaxed">
                        Join thousands of satisfied collectors and drivers who found their
                        perfect match through <span class="text-white">BijuliCar.com</span>
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <button
                            class="group relative px-10 py-5 bg-[#4ade80] rounded-2xl overflow-hidden transition-all hover:bg-[#22c55e] active:scale-95 shadow-[0_0_30px_rgba(74,222,128,0.3)]">
                            <span class="relative z-10 text-black font-black uppercase italic tracking-wider">Start
                                Shopping</span>
                        </button>

                        <button
                            class="px-10 py-5 bg-white/5 border border-white/10 rounded-2xl text-white font-black uppercase italic tracking-wider hover:bg-white/10 hover:border-white/20 transition-all active:scale-95 backdrop-blur-sm">
                            List Your Vehicle
                        </button>
                    </div>

                    <div class="mt-5 flex items-center justify-center gap-8 border-t border-white/5 pt-10">
                        <div class="text-center">
                            <p class="text-white text-lg font-black italic uppercase leading-none">100%</p>
                            <p class="text-[8px] text-slate-500 uppercase font-bold tracking-[0.2em] mt-1">Verified Sellers
                            </p>
                        </div>
                        <div class="w-px h-8 bg-white/10"></div>
                        <div class="text-center">
                            <p class="text-white text-lg font-black italic uppercase leading-none">Safe</p>
                            <p class="text-[8px] text-slate-500 uppercase font-bold tracking-[0.2em] mt-1">Transactions</p>
                        </div>
                        <div class="w-px h-8 bg-white/10"></div>
                        <div class="text-center">
                            <p class="text-white text-lg font-black italic uppercase leading-none">No</p>
                            <p class="text-[8px] text-slate-500 uppercase font-bold tracking-[0.2em] mt-1">Hidden Costs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            effect: "fade", // Smoother transition for full-screen hero
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <style>
        /* Modern long pill pagination */
        .swiper-pagination-bullet {
            background: #fff !important;
            opacity: 0.5;
            transition: all 0.3s ease;
        }

        .swiper-pagination-bullet-active {
            background: #4ade80 !important;
            width: 35px !important;
            border-radius: 4px !important;
            opacity: 1;
        }

        /* Fix Swiper navigation buttons shadow/glow */
        .swiper-button-next,
        .swiper-button-prev {
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.5));
        }
    </style>
@endsection
