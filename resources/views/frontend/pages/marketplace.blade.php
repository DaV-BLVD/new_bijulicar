@extends('frontend.app')

@section('content')
    {{-- header --}}

    <section
        class="relative pt-32 pb-20 lg:pt-38 lg:pb-32 min-h-screen flex flex-col justify-end overflow-hidden bg-[#0a0f1e] text-white">

        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/marketplace_header.jpg') }}"
                class="w-full h-full object-cover scale-105 blur-[8px] opacity-20 lg:opacity-20" alt="Background">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,_rgba(15,23,42,0.1)_0%,_#0a0f1e_100%)]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">

            <div class="mb-10 lg:mb-16">
                <div class="flex items-center gap-3 mb-4 lg:mb-6">
                    <span class="w-8 lg:w-10 h-[2px] bg-[#4ade80]"></span>
                    <span class="text-[8px] lg:text-[10px] uppercase tracking-[0.4em] text-[#4ade80] font-bold">Global
                        Marketplace</span>
                </div>
                <h1
                    class="text-5xl md:text-7xl lg:text-8xl font-black tracking-tighter text-white uppercase italic leading-[0.85]">
                    <span class="block">Digital</span>
                    <span class="text-slate-500">Showroom</span>
                </h1>
                <p
                    class="mt-6 lg:mt-8 text-slate-400 text-xs lg:text-base font-medium max-w-xs lg:max-w-sm leading-relaxed">
                    Browse our verified inventory of high-performance electric, hybrid, and precision traditional machines.
                </p>
            </div>

            <div
                class="bg-white rounded-[2rem] lg:rounded-full p-2 lg:p-2.5 shadow-[0_40px_100px_-20px_rgba(0,0,0,0.6)] border border-white/10 backdrop-blur-md">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 items-center">
                    <div class="w-full relative group">
                        <div
                            class="absolute inset-y-0 left-6 flex items-center pointer-events-none text-slate-300 group-focus-within:text-[#4ade80] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Search BYD, Tesla..."
                            class="w-full bg-slate-100/80 lg:bg-slate-100/50 border-none rounded-2xl lg:rounded-full py-4 lg:py-6 pl-14 pr-8 text-sm font-bold placeholder:text-slate-400 text-slate-900 focus:ring-2 focus:ring-[#4ade80]/20 transition-all">
                    </div>
                    <div class="w-full relative">
                        <select
                            class="w-full bg-slate-100/80 lg:bg-slate-100/50 border-none rounded-2xl lg:rounded-full py-4 lg:py-6 px-8 text-sm font-black text-slate-900 appearance-none cursor-pointer focus:ring-2 focus:ring-[#4ade80]/20 uppercase tracking-tight">
                            <option>Drivetrain</option>
                            <option>EV Power</option>
                            <option>Hybrid Sync</option>
                        </select>
                        <div class="absolute inset-y-0 right-6 flex items-center pointer-events-none text-slate-400"><svg
                                class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path d="M19 9l-7 7-7-7" />
                            </svg></div>
                    </div>
                    <div class="w-full relative">
                        <select
                            class="w-full bg-slate-100/80 lg:bg-slate-100/50 border-none rounded-2xl lg:rounded-full py-4 lg:py-6 px-8 text-sm font-black text-slate-900 appearance-none cursor-pointer focus:ring-2 focus:ring-[#4ade80]/20 uppercase tracking-tight">
                            <option>Location</option>
                            <option>Kathmandu</option>
                            <option>Pokhara</option>
                        </select>
                        <div class="absolute inset-y-0 right-6 flex items-center pointer-events-none text-slate-400"><svg
                                class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                                <path d="M19 9l-7 7-7-7" />
                            </svg></div>
                    </div>
                    <button
                        class="w-full px-12 py-4 lg:py-6 bg-black text-white rounded-2xl lg:rounded-full font-black uppercase italic tracking-widest text-sm hover:bg-[#4ade80] hover:text-black transition-all duration-500 active:scale-95 shadow-xl shadow-black/20">
                        Search Units
                    </button>
                </div>
            </div>

            <div class="mt-6">
                <button onclick="toggleFilters()"
                    class="group flex items-center gap-3 text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 hover:text-[#4ade80] transition-all">
                    <span
                        class="p-2.5 bg-white/10 border border-white/10 rounded-xl group-hover:border-[#4ade80]/50 text-white group-hover:text-[#4ade80] backdrop-blur-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </span>
                    Advanced Parameters
                </button>

                <div id="advanced-panel"
                    class="hidden relative mt-6 p-8 lg:p-10 bg-[#0f172a]/90 border border-white/10 rounded-[2rem] lg:rounded-[3rem] shadow-2xl backdrop-blur-xl overflow-hidden">
                    <div class="absolute inset-0 z-0 opacity-[0.05] pointer-events-none"
                        style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 24px 24px;">
                    </div>

                    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                        <div class="space-y-3">
                            <label class="text-[10px] font-black uppercase tracking-widest text-[#4ade80]">Vehicle
                                Make</label>
                            <input type="text" placeholder="e.g. Tesla, BYD"
                                class="w-full bg-white/5 border border-white/10 rounded-xl py-4 px-6 text-sm font-bold text-white placeholder:text-slate-600 focus:ring-2 focus:ring-[#4ade80]/20 outline-none">
                        </div>
                        <div class="space-y-3">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Model
                                Name</label>
                            <input type="text" placeholder="e.g. Model 3"
                                class="w-full bg-white/5 border border-white/10 rounded-xl py-4 px-6 text-sm font-bold text-white placeholder:text-slate-600 focus:ring-2 focus:ring-[#4ade80]/20 outline-none">
                        </div>
                        <div class="space-y-3 lg:col-span-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Year
                                Range</label>
                            <div class="grid grid-cols-2 gap-3">
                                <input type="number" placeholder="From"
                                    class="w-full bg-white/5 border border-white/10 rounded-xl py-4 px-4 text-sm font-bold text-white placeholder:text-slate-600 outline-none">
                                <input type="number" placeholder="To"
                                    class="w-full bg-white/5 border border-white/10 rounded-xl py-4 px-4 text-sm font-bold text-white placeholder:text-slate-600 outline-none">
                            </div>
                        </div>
                        <div class="space-y-3 lg:col-span-2">
                            <label class="text-[10px] font-black uppercase tracking-widest text-slate-400">Price Structure
                                (NRs)</label>
                            <div class="grid grid-cols-2 gap-3">
                                <input type="text" placeholder="Min"
                                    class="w-full bg-white/5 border border-white/10 rounded-xl py-4 px-4 text-sm font-bold text-white placeholder:text-slate-600 outline-none">
                                <input type="text" placeholder="Max"
                                    class="w-full bg-white/5 border border-white/10 rounded-xl py-4 px-4 text-sm font-bold text-white placeholder:text-slate-600 outline-none">
                            </div>
                        </div>
                        <div class="flex items-end pb-1 lg:justify-center">
                            <label class="relative inline-flex items-center cursor-pointer group">
                                <input type="checkbox" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-white/10 rounded-full peer peer-checked:after:translate-x-full after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-slate-400 after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#4ade80] peer-checked:after:bg-black">
                                </div>
                                <span
                                    class="ml-3 text-[10px] font-black uppercase tracking-widest text-slate-400 group-hover:text-white transition-colors">Only
                                    Available</span>
                            </label>
                        </div>
                        <div class="flex items-end justify-end gap-3">
                            <button
                                class="px-6 py-4 text-[10px] font-black uppercase tracking-widest text-slate-500 hover:text-white">Clear</button>
                            <button
                                class="px-10 py-4 bg-[#4ade80] text-black rounded-xl text-[10px] font-black uppercase tracking-widest italic hover:bg-white transition-all shadow-lg shadow-black/40">Apply</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 flex flex-col md:flex-row items-center justify-between gap-6 px-4">
                <div class="flex flex-wrap justify-center items-center gap-4 lg:gap-6">
                    <div class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#4ade80] animate-pulse"></span>
                        <span class="text-[9px] lg:text-[10px] font-black text-slate-400 uppercase tracking-widest">2,547
                            Active Units</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                        <span class="text-[9px] lg:text-[10px] font-black text-slate-400 uppercase tracking-widest">156
                            Verified Dealers</span>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-[9px] lg:text-[10px] font-bold text-slate-600 uppercase italic">Sort:</span>
                    <button
                        class="text-[9px] lg:text-[10px] font-black text-white uppercase underline decoration-[#4ade80] decoration-2 underline-offset-4 hover:text-[#4ade80] transition-colors">Newest
                        Inventory</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleFilters() {
            const panel = document.getElementById('advanced-panel');
            panel.classList.toggle('hidden');
        }
    </script>
@endsection
