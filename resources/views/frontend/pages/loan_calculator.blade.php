@extends('frontend.app')

@section('content')
    <section class="relative bg-[#050a15] pt-[110px] pb-10 lg:pt-32 lg:pb-20 overflow-hidden border-b border-white/5">

        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&q=80&w=2071"
                class="w-full h-full object-cover opacity-90 mix-blend-luminosity scale-110 blur-[2px]"
                alt="Finance Background">

            <div class="absolute inset-0 bg-gradient-to-r from-[#050a15] via-[#050a15]/80 to-transparent"></div>
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,_rgba(74,222,128,0.1)_0%,_transparent_40%)]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <div class="space-y-6">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#4ade80]"></span>
                        <span class="text-[10px] uppercase tracking-[0.3em] text-slate-300 font-bold">Finance
                            Intelligence</span>
                    </div>

                    <h1 class="text-4xl md:text-6xl font-black text-white uppercase italic tracking-tighter leading-[0.9]">
                        EMI <span class="text-[#4ade80]">Architect</span>
                    </h1>

                    <p class="text-slate-400 text-base md:text-lg max-w-lg font-medium leading-relaxed">
                        Calculate your path to ownership with precision. Adjust terms, explore rates, and visualize your
                        <span class="text-white">monthly investment</span> in real-time.
                    </p>

                    <div class="flex items-center gap-8 pt-4 border-t border-white/5">
                        <div>
                            <p class="text-[10px] font-black text-slate-500 uppercase tracking-widest mb-1">Interest Rates
                                From</p>
                            <p class="text-xl font-black text-white">8.5<span class="text-[#4ade80]">%</span></p>
                        </div>
                        <div class="w-px h-8 bg-white/10"></div>
                        <div>
                            <p class="text-[10px] font-black text-slate-500 uppercase tracking-widest mb-1">Max Tenure</p>
                            <p class="text-xl font-black text-white">84 <span
                                    class="text-slate-500 text-sm italic font-medium">Months</span></p>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <div class="relative group">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-[#4ade80]/20 to-blue-500/20 rounded-3xl blur opacity-75 group-hover:opacity-100 transition duration-1000">
                        </div>

                        <div class="relative bg-white/5 border border-white/10 backdrop-blur-2xl rounded-3xl p-8">
                            <div class="flex justify-between items-start mb-8">
                                <div>
                                    <h3 class="text-white font-black uppercase italic text-sm tracking-wider">Quick Estimate
                                    </h3>
                                    <p class="text-slate-500 text-[11px] font-bold uppercase">Based on average market rates
                                    </p>
                                </div>
                                <div class="p-2 bg-[#4ade80]/10 rounded-xl">
                                    <svg class="w-5 h-5 text-[#4ade80]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-400">Monthly Installment</span>
                                    <span class="text-white font-black">NPR 42,500</span>
                                </div>
                                <div class="w-full bg-white/5 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-[#4ade80] h-full w-[65%] shadow-[0_0_10px_rgba(74,222,128,0.5)]"></div>
                                </div>
                                <p class="text-[10px] text-slate-500 font-medium">
                                    *This is an approximate calculation. Final terms may vary by lender.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
