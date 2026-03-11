@extends('frontend.app')

@section('content')
    <section class="relative pt-32 pb-20 bg-white overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none"
            style="background-image: radial-gradient(#000 1.5px, transparent 1.5px); background-size: 40px 40px;"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-12 h-[1px] bg-[#4ade80]"></span>
                        <span class="text-[10px] uppercase tracking-[0.4em] text-slate-400 font-bold">Global Inventory</span>
                    </div>
                    <h1
                        class="text-5xl md:text-7xl font-black tracking-tighter text-slate-900 uppercase italic leading-[0.9]">
                        Find Your <br>
                        <span class="text-slate-200">Perfect</span> Machine
                    </h1>
                </div>

                <div class="flex items-center gap-4 bg-slate-50 p-2 rounded-2xl border border-slate-100">
                    <button
                        class="px-6 py-2.5 bg-white shadow-sm rounded-xl text-xs font-black uppercase tracking-wider text-slate-900 transition-all">All
                        Cars</button>
                    <button
                        class="px-6 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-slate-400 hover:text-slate-600 transition-all">New</button>
                    <button
                        class="px-6 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-slate-400 hover:text-slate-600 transition-all">Pre-Owned</button>
                </div>
            </div>

            <div
                class="bg-white border border-slate-100 rounded-[2.5rem] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.08)] p-4 md:p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 items-center">

                    <div class="relative group">
                        <div
                            class="absolute inset-y-0 left-5 flex items-center pointer-events-none text-slate-300 group-focus-within:text-[#4ade80] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Search by model or brand..."
                            class="w-full bg-slate-50 border-none rounded-2xl py-4 pl-14 pr-6 text-sm font-bold placeholder:text-slate-400 focus:ring-2 focus:ring-[#4ade80]/20 transition-all">
                    </div>

                    <div class="relative">
                        <select
                            class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold text-slate-900 appearance-none focus:ring-2 focus:ring-[#4ade80]/20 cursor-pointer transition-all">
                            <option>All Drivetrains</option>
                            <option>Full Electric (EV)</option>
                            <option>Hybrid Systems</option>
                            <option>Petrol / Diesel</option>
                        </select>
                        <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative">
                        <select
                            class="w-full bg-slate-50 border-none rounded-2xl py-4 px-6 text-sm font-bold text-slate-900 appearance-none focus:ring-2 focus:ring-[#4ade80]/20 cursor-pointer transition-all">
                            <option>Price Range</option>
                            <option>Under NRs 2M</option>
                            <option>NRs 2M - 5M</option>
                            <option>Above NRs 5M</option>
                        </select>
                        <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <button
                        class="bg-black text-white py-4 rounded-2xl font-black uppercase tracking-[0.1em] italic text-sm hover:bg-[#4ade80] hover:text-black transition-all duration-300 shadow-lg shadow-black/10 active:scale-95">
                        Apply Filters
                    </button>
                </div>
            </div>

            <div class="mt-8 flex flex-wrap items-center gap-4">
                <span class="text-[10px] font-black uppercase tracking-widest text-slate-400 mr-2">Trending:</span>
                <a href="#"
                    class="px-4 py-1.5 rounded-full border border-slate-200 text-[10px] font-bold uppercase tracking-wider hover:border-[#4ade80] hover:text-[#4ade80] transition-all">BYD
                    Atto 3</a>
                <a href="#"
                    class="px-4 py-1.5 rounded-full border border-slate-200 text-[10px] font-bold uppercase tracking-wider hover:border-[#4ade80] hover:text-[#4ade80] transition-all">Tesla
                    Model 3</a>
                <a href="#"
                    class="px-4 py-1.5 rounded-full border border-slate-200 text-[10px] font-bold uppercase tracking-wider hover:border-[#4ade80] hover:text-[#4ade80] transition-all">MG
                    ZS EV</a>
                <a href="#"
                    class="px-4 py-1.5 rounded-full border border-slate-200 text-[10px] font-bold uppercase tracking-wider hover:border-[#4ade80] hover:text-[#4ade80] transition-all">Hyundai
                    IONIQ</a>
            </div>
        </div>
    </section>
@endsection
