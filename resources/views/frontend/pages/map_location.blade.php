@extends('frontend.app')

@section('content')
    <section class="relative bg-[#0a0f1e] pt-[110px] pb-8 lg:pt-32 lg:pb-15 overflow-hidden border-b border-white/5">

        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?auto=format&fit=crop&q=80&w=2071"
                class="w-full h-full object-cover opacity-20 lg:opacity-30 blur-[4px] scale-105" alt="Map Background">

            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0f1e] via-transparent to-[#0a0f1e]"></div>
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(74,222,128,0.08)_0%,_transparent_50%)]">
            </div>

            <div
                class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#4ade80]/30 to-transparent">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8">

                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="flex -space-x-2">
                            <span class="w-2 h-2 rounded-full bg-[#4ade80] animate-pulse"></span>
                        </div>
                        <span class="text-[10px] uppercase tracking-[0.4em] text-[#4ade80] font-black">Interactive
                            Network</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl font-black text-white uppercase italic tracking-tighter leading-none">
                        Unit <span class="text-slate-400">Locator</span>
                    </h1>

                    <p class="text-slate-300 text-sm max-w-md font-medium leading-relaxed">
                        Pinpoint verified inventory across <span class="text-[#4ade80]">7 major provinces</span>. Real-time
                        availability synced with local dealer hubs.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-4 lg:gap-6">
                    <div
                        class="bg-white/5 border border-white/10 backdrop-blur-xl rounded-2xl p-4 flex items-center gap-4 hover:border-[#4ade80]/30 transition-all cursor-pointer group">
                        <div class="p-2 bg-[#4ade80]/10 rounded-lg group-hover:bg-[#4ade80] transition-all duration-500">
                            <svg class="w-5 h-5 text-[#4ade80] group-hover:text-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Active Region</p>
                            <p class="text-sm font-black text-white">Kathmandu Valley</p>
                        </div>
                    </div>

                    <div class="hidden md:flex flex-col gap-2">
                        <label class="text-[9px] font-black text-slate-500 uppercase tracking-widest ml-1">Search
                            Radius</label>
                        <div class="flex bg-black/60 p-1 rounded-xl border border-white/10 backdrop-blur-md">
                            <button
                                class="px-4 py-1.5 rounded-lg text-[10px] font-bold bg-[#4ade80] text-black shadow-lg shadow-[#4ade80]/20">10km</button>
                            <button
                                class="px-4 py-1.5 rounded-lg text-[10px] font-bold text-slate-400 hover:text-white transition-colors">25km</button>
                            <button
                                class="px-4 py-1.5 rounded-lg text-[10px] font-bold text-slate-400 hover:text-white transition-colors">50km</button>
                        </div>
                    </div>

                    <button
                        class="h-14 px-8 bg-white text-black rounded-2xl font-black uppercase italic tracking-widest text-xs hover:bg-[#4ade80] transition-all flex items-center gap-3 group shadow-xl shadow-black/40">
                        List View
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mt-12 flex items-center gap-6 overflow-x-auto pb-4 no-scrollbar border-t border-white/10 pt-6">
                <span class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.2em] whitespace-nowrap">Quick
                    Jump:</span>
                <a href="#"
                    class="text-[10px] font-black text-[#4ade80] uppercase tracking-widest hover:text-white transition-colors">Bagmati</a>
                <a href="#"
                    class="text-[10px] font-black text-slate-500 uppercase tracking-widest hover:text-[#4ade80] transition-colors">Gandaki</a>
                <a href="#"
                    class="text-[10px] font-black text-slate-500 uppercase tracking-widest hover:text-[#4ade80] transition-colors">Lumbini</a>
                <a href="#"
                    class="text-[10px] font-black text-slate-500 uppercase tracking-widest hover:text-[#4ade80] transition-colors">Koshi</a>
                <a href="#"
                    class="text-[10px] font-black text-slate-500 uppercase tracking-widest hover:text-[#4ade80] transition-colors">Madhesh</a>
            </div>
        </div>
    </section>
@endsection
