@extends('frontend.app')

@section('content')
    {{-- News Header --}}
    <section class="relative pt-32 pb-16 lg:pt-48 lg:pb-24 overflow-hidden bg-[#0a0f1e] text-white">

        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/news_header.jpg') }}"
                class="w-full h-full object-cover opacity-100 scale-105 blur-[3px]" alt="Automotive News Background">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0f1e]/80 via-[#0a0f1e]/25 to-[#202638]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-10">

                <div class="max-w-3xl">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="w-12 h-[3px] bg-[#4ade80]"></span>
                        <span class="text-[10px] lg:text-[12px] uppercase tracking-[0.5em] text-[#4ade80] font-bold">The Intelligence Hub</span>
                    </div>

                    <h1 class="text-6xl md:text-8xl font-black tracking-tighter uppercase italic leading-[0.8] mb-8">
                        Auto<span class="text-slate-400 block lg:inline lg:ml-4">Intel</span>
                    </h1>

                    <p
                        class="text-slate-400 text-sm lg:text-lg font-medium max-w-xl leading-relaxed border-l-2 border-white/10 pl-6">
                        Stay ahead of the curve with expert analysis on <span class="text-white">EV breakthroughs</span>,
                        hybrid efficiency, and the evolving landscape of traditional precision engineering.
                    </p>
                </div>

                <div class="hidden lg:flex flex-col items-end text-right space-y-4">
                    <div class="bg-white/5 border border-white/10 backdrop-blur-md rounded-2xl p-6">
                        <div class="flex items-center justify-end gap-3 mb-1">
                            <span class="relative flex h-2 w-2">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#4ade80] opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#4ade80]"></span>
                            </span>
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-400">Live
                                Updates</span>
                        </div>
                        <p class="text-xs font-bold text-white uppercase italic">March 2026 Edition</p>
                    </div>
                </div>
            </div>

            <div class="mt-16 flex flex-wrap gap-3 lg:gap-4 border-t border-white/5 pt-10">
                <button
                    class="px-8 py-3 bg-[#4ade80] text-black rounded-full text-[10px] font-black uppercase tracking-widest italic shadow-lg shadow-[#4ade80]/20 hover:scale-105 transition-transform">
                    All Stories
                </button>
                <button
                    class="px-8 py-3 bg-white/5 border border-white/10 hover:border-[#4ade80]/50 rounded-full text-[10px] font-black uppercase tracking-widest text-slate-400 hover:text-white transition-all">
                    Electric
                </button>
                <button
                    class="px-8 py-3 bg-white/5 border border-white/10 hover:border-[#4ade80]/50 rounded-full text-[10px] font-black uppercase tracking-widest text-slate-400 hover:text-white transition-all">
                    Hybrid
                </button>
                <button
                    class="px-8 py-3 bg-white/5 border border-white/10 hover:border-[#4ade80]/50 rounded-full text-[10px] font-black uppercase tracking-widest text-slate-400 hover:text-white transition-all">
                    Markets
                </button>
            </div>
        </div>
    </section>

    {{-- News Content Grid starts here --}}
@endsection
