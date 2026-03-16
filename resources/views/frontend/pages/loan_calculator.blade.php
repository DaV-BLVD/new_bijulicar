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

    <section class="py-24 bg-[#f8fafc]">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="mb-12">
            <h2 class="text-4xl font-black text-slate-900 uppercase italic tracking-tighter">
                Loan <span class="text-[#16a34a]">Intelligence</span>
            </h2>
            <p class="text-slate-500 font-medium mt-2">Precision financing tools for your next vehicle acquisition.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <div class="lg:col-span-7 space-y-10">
                <div class="bg-white p-10 rounded-[2.5rem] border border-slate-200 shadow-sm">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-8 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-[#16a34a]"></span> Configuration
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Vehicle Price (NRs)</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold text-xs">NRs</span>
                                <input type="number" value="50000" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 pl-14 pr-4 text-slate-900 font-bold focus:ring-4 focus:ring-green-50 focus:border-[#16a34a] outline-none transition-all">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Down Payment (NRs)</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold text-xs">NRs</span>
                                <input type="number" value="10000" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 pl-14 pr-4 text-slate-900 font-bold focus:ring-4 focus:ring-green-50 focus:border-[#16a34a] outline-none transition-all">
                            </div>
                            <p class="text-[9px] text-[#16a34a] font-bold uppercase tracking-wider mt-1 px-1">20.0% of total price</p>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Interest Rate (APR %)</label>
                            <input type="number" value="4.5" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 px-4 text-slate-900 font-bold focus:ring-4 focus:ring-green-50 focus:border-[#16a34a] outline-none transition-all">
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Loan Term</label>
                            <select class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 px-4 text-slate-900 font-bold focus:ring-4 focus:ring-green-50 focus:border-[#16a34a] outline-none transition-all appearance-none">
                                <option>5 Years (60 Months)</option>
                                <option>3 Years (36 Months)</option>
                                <option>7 Years (84 Months)</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-8 pt-8 border-t border-slate-100 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Trade-in Value</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold text-xs">NRs</span>
                                <input type="number" value="0" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 pl-14 pr-4 text-slate-900 font-bold outline-none">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Sales Tax (%)</label>
                            <input type="number" value="8.5" class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 px-4 text-slate-900 font-bold outline-none">
                        </div>
                    </div>
                </div>

                <div class="bg-green-50/50 border border-green-100 p-6 rounded-3xl flex items-start gap-4">
                    <span class="text-2xl">💡</span>
                    <div>
                        <h4 class="text-xs font-black text-[#16a34a] uppercase tracking-widest mb-1">Money-Saving Strategy</h4>
                        <p class="text-slate-600 text-[13px] leading-relaxed">Increasing your down payment to <span class="font-bold text-slate-900">25%</span> could lower your monthly commitment by <span class="font-bold text-slate-900">NRs 85</span> and reduce total interest paid over the life of the loan.</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 space-y-6 top-32">
                
                <div class="bg-slate-900 rounded-[3rem] p-10 text-white relative overflow-hidden shadow-2xl shadow-green-900/20">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-[#4ade80]/10 blur-[80px] rounded-full -mr-20 -mt-20"></div>
                    
                    <div class="relative z-10">
                        <span class="text-[10px] font-black text-[#4ade80] uppercase tracking-[0.4em] mb-10 block">Monthly Payment</span>
                        
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-xl font-bold opacity-50">NRs</span>
                            <span class="text-7xl font-black italic tracking-tighter leading-none">853</span>
                        </div>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-widest">Fixed for 60 Months • 4.5% APR</p>

                        <div class="mt-12 space-y-4 pt-8 border-t border-white/10">
                            <div class="flex justify-between items-center">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Loan Amount</span>
                                <span class="text-sm font-black">NRs 45,750</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Total Interest</span>
                                <span class="text-sm font-black text-[#4ade80]">NRs 5,425</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Payoff Date</span>
                                <span class="text-sm font-black">March 16, 2031</span>
                            </div>
                        </div>

                        <button class="w-full mt-10 py-5 bg-[#4ade80] text-black rounded-2xl font-black uppercase italic tracking-widest text-sm hover:bg-white transition-all active:scale-95 shadow-xl shadow-green-500/10">
                            Download Full Schedule 💸
                        </button>
                    </div>
                </div>

                <div class="bg-white border border-slate-200 rounded-[2.5rem] p-8">
                    <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-6">Market Rate Guide</h4>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-4 rounded-xl bg-green-50/50 border border-green-100">
                            <div class="flex items-center gap-3">
                                <span class="text-lg">✅</span>
                                <span class="text-xs font-bold text-slate-700">Excellent (750+)</span>
                            </div>
                            <span class="text-xs font-black text-[#16a34a]">2.5% - 4.0%</span>
                        </div>
                        <div class="flex justify-between items-center p-4 rounded-xl border border-slate-100">
                            <div class="flex items-center gap-3">
                                <span class="text-lg">👍</span>
                                <span class="text-xs font-bold text-slate-700">Good (700-749)</span>
                            </div>
                            <span class="text-xs font-black text-slate-900">4.0% - 6.0%</span>
                        </div>
                        <div class="flex justify-between items-center p-4 rounded-xl border border-slate-100">
                            <div class="flex items-center gap-3">
                                <span class="text-lg">⚠️</span>
                                <span class="text-xs font-bold text-slate-700">Fair (650-699)</span>
                            </div>
                            <span class="text-xs font-black text-slate-900">6.0% - 10.0%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-12 mt-12 bg-white rounded-[2.5rem] border border-slate-200 overflow-hidden shadow-sm">
                <div class="p-8 border-b border-slate-100 flex justify-between items-center bg-white sticky left-0">
                    <h3 class="text-xs font-black text-slate-900 uppercase tracking-[0.2em]">Amortization Schedule (First 12 Months)</h3>
                    <div class="flex gap-4">
                        <button class="text-[10px] font-black text-slate-400 uppercase tracking-widest hover:text-slate-900 transition-colors">Export CSV</button>
                        <button class="text-[10px] font-black text-[#16a34a] uppercase tracking-widest hover:underline">View Full 60 Months</button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left min-w-[800px]">
                        <thead>
                            <tr class="bg-slate-50 text-[10px] font-black text-slate-400 uppercase tracking-widest border-b border-slate-100">
                                <th class="px-8 py-5">Month</th>
                                <th class="px-8 py-5">Payment</th>
                                <th class="px-8 py-5">Principal Content</th>
                                <th class="px-8 py-5">Interest Paid</th>
                                <th class="px-8 py-5">Remaining Balance</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-bold text-slate-700">
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                                <td class="px-8 py-5 text-slate-400 font-mono">01</td>
                                <td class="px-8 py-5">NRs 852.91</td>
                                <td class="px-8 py-5 text-[#16a34a]">NRs 681.35</td>
                                <td class="px-8 py-5 text-red-400">NRs 171.56</td>
                                <td class="px-8 py-5 text-slate-900">NRs 45,069</td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                                <td class="px-8 py-5 text-slate-400 font-mono">02</td>
                                <td class="px-8 py-5">NRs 852.91</td>
                                <td class="px-8 py-5 text-[#16a34a]">NRs 683.91</td>
                                <td class="px-8 py-5 text-red-400">NRs 169.00</td>
                                <td class="px-8 py-5 text-slate-900">NRs 44,385</td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                                <td class="px-8 py-5 text-slate-400 font-mono">03</td>
                                <td class="px-8 py-5">NRs 852.91</td>
                                <td class="px-8 py-5 text-[#16a34a]">NRs 686.47</td>
                                <td class="px-8 py-5 text-red-400">NRs 166.44</td>
                                <td class="px-8 py-5 text-slate-900">NRs 43,698</td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                                <td class="px-8 py-5 text-slate-400 font-mono">04</td>
                                <td class="px-8 py-5">NRs 852.91</td>
                                <td class="px-8 py-5 text-[#16a34a]">NRs 689.05</td>
                                <td class="px-8 py-5 text-red-400">NRs 163.86</td>
                                <td class="px-8 py-5 text-slate-900">NRs 43,009</td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 transition-colors">
                                <td class="px-8 py-5 text-slate-400 font-mono">05</td>
                                <td class="px-8 py-5">NRs 852.91</td>
                                <td class="px-8 py-5 text-[#16a34a]">NRs 691.63</td>
                                <td class="px-8 py-5 text-red-400">NRs 161.28</td>
                                <td class="px-8 py-5 text-slate-900">NRs 42,318</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-6 bg-slate-50/50 text-center">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">
                        Values shown are estimates. Actual loan terms may vary based on lender approval.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
