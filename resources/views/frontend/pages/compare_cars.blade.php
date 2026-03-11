@extends('frontend.app')

@section('content')
    <section class="relative w-full min-h-[60vh] flex items-center justify-center overflow-hidden pt-20">

        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1619767886558-efdc259cde1a?q=80&w=2070&auto=format&fit=crop"
                class="w-full h-full object-cover" alt="Luxury EV Background">
            <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-[2px]"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#f1f5f9] via-transparent to-slate-900/40"></div>
        </div>

        <div class="max-w-7xl mx-auto w-full px-6 relative z-10 py-20">
            <div class="flex flex-col items-center text-center space-y-8">

                <div
                    class="flex items-center gap-2 px-4 py-1.5 bg-white/10 backdrop-blur-xl border border-white/20 rounded-full">
                    <span class="text-[10px] font-black text-[#4ade80] uppercase tracking-[0.3em]">Vehicle Analysis
                        Mode</span>
                    <span class="text-white opacity-40 text-xs">|</span>
                    <span class="text-[10px] font-black text-white uppercase tracking-[0.3em]">Comparison Engine</span>
                </div>

                <div class="max-w-3xl">
                    <h1
                        class="text-5xl md:text-7xl font-black text-white uppercase italic tracking-tighter leading-none mb-6">
                        Side-by-Side <br><span class="text-[#4ade80]">Comparison</span>
                    </h1>
                    <p class="text-slate-200 text-sm md:text-base font-medium leading-relaxed max-w-xl mx-auto opacity-90">
                        Precision data for the next generation of drivers. Compare performance, battery tech, and financing
                        💰 for the world's most advanced EVs.
                    </p>
                </div>

                <div
                    class="w-full max-w-4xl bg-black/50 backdrop-blur-2xl border border-white/20 p-4 md:p-6 rounded-[2.5rem] shadow-2xl flex flex-col md:flex-row items-center justify-between gap-6">

                    <div class="flex items-center gap-4 px-4">
                        <div class="flex -space-x-3">
                            <div
                                class="w-10 h-10 rounded-full border-2 border-slate-900 bg-slate-800 flex items-center justify-center text-[10px] font-bold text-white uppercase">
                                EV1</div>
                            <div
                                class="w-10 h-10 rounded-full border-2 border-slate-900 bg-slate-800 flex items-center justify-center text-[10px] font-bold text-white uppercase">
                                EV2</div>
                            <div
                                class="w-10 h-10 rounded-full border-2 border-slate-900 bg-slate-700 flex items-center justify-center text-lg text-white font-light">
                                +</div>
                        </div>
                        <div class="text-left">
                            <p class="text-[10px] font-black text-[#4ade80] uppercase tracking-widest">Selected</p>
                            <p class="text-white text-xs font-bold">2 of 3 Vehicles Added</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <button
                            class="flex-1 md:flex-none px-6 py-3.5 rounded-2xl bg-white/5 hover:bg-white/10 border border-white/10 text-white transition-all active:scale-95">
                            <span class="text-[11px] font-black uppercase tracking-widest">Reset Tool</span>
                        </button>
                        <button
                            class="flex-1 md:flex-none px-8 py-3.5 rounded-2xl bg-[#4ade80] text-black font-black uppercase italic tracking-widest text-[11px] shadow-lg shadow-green-400/20 hover:bg-[#22c55e] transition-all active:scale-95">
                            Add Vehicle
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
