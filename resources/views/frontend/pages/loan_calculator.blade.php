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

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

                <div class="lg:col-span-7">
                    <div class="bg-white p-10 rounded-[2.5rem] border border-slate-200 shadow-sm h-full">
                        <h3
                            class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-8 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#16a34a]"></span> Car Loan Configuration
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Vehicle
                                    Price (NRs)</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold text-xs">NRs</span>
                                    <input type="number" id="carPrice" value="500000"
                                        class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 pl-14 pr-4 text-slate-900 font-bold focus:ring-4 focus:ring-green-50 focus:border-[#16a34a] outline-none transition-all">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Down
                                    Payment (NRs)</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 font-bold text-xs">NRs</span>
                                    <input type="number" id="downPayment" value="100000"
                                        class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 pl-14 pr-4 text-slate-900 font-bold focus:ring-4 focus:ring-green-50 focus:border-[#16a34a] outline-none transition-all">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Interest
                                    Rate (APR %)</label>
                                <input type="number" id="interestRate" value="12"
                                    class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 px-4 text-slate-900 font-bold focus:ring-4 focus:ring-green-50 focus:border-[#16a34a] outline-none transition-all">
                            </div>

                            <div class="space-y-2">
                                <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest ml-1">Loan
                                    Term</label>
                                <select id="tenure"
                                    class="w-full bg-slate-50 border border-slate-200 rounded-xl py-4 px-4 text-slate-900 font-bold focus:ring-4 focus:ring-green-50 focus:border-[#16a34a] outline-none transition-all appearance-none">
                                    <option value="5">5 Years (60 Months)</option>
                                    <option value="3">3 Years (36 Months)</option>
                                    <option value="7">7 Years (84 Months)</option>
                                </select>
                            </div>
                        </div>

                        <button onclick="calculateLoan()"
                            class="mt-8 w-full py-4 bg-[#16a34a] text-white rounded-xl font-black uppercase tracking-widest text-sm hover:bg-green-600 transition-all shadow-lg shadow-green-900/20">
                            Calculate Loan
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div id="loanResult"
                        class="bg-slate-900 rounded-[2.5rem] p-10 text-white relative overflow-hidden shadow-2xl h-full flex flex-col justify-center transition-all duration-500 border border-slate-800">
                        <div class="relative z-10">
                            <span
                                class="text-[10px] font-black text-[#4ade80] uppercase tracking-[0.4em] mb-4 block">Monthly
                                Payment</span>

                            <div class="flex items-baseline gap-2 mb-2">
                                <span class="text-xl font-bold opacity-50">NRs</span>
                                <span id="monthlyEMI"
                                    class="text-5xl font-black italic tracking-tighter leading-none text-slate-700">----</span>
                            </div>

                            <p id="emiDetails" class="text-slate-500 text-[10px] font-bold uppercase tracking-widest">
                                Awaiting configuration...</p>

                            <div class="mt-8 space-y-6 pt-8 border-t border-white/5">
                                <div class="flex justify-between items-center">
                                    <span class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Loan
                                        Amount</span>
                                    <span id="loanAmount" class="text-sm font-bold text-slate-600">----</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Total
                                        Interest</span>
                                    <span id="totalInterest" class="text-sm font-bold text-slate-600">----</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Total
                                        Repayment</span>
                                    <span id="totalRepayment" class="text-sm font-bold text-slate-600">----</span>
                                </div>
                            </div>
                        </div>

                        <div id="glowEffect"
                            class="absolute -bottom-20 -right-20 w-64 h-64 bg-green-500/5 rounded-full blur-[100px] transition-all duration-700">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function calculateLoan() {
            // Inputs
            let carPrice = parseFloat(document.getElementById('carPrice').value);
            let downPayment = parseFloat(document.getElementById('downPayment').value);
            let rawInterest = parseFloat(document.getElementById('interestRate').value);
            let interestRate = rawInterest / 100 / 12; // monthly rate
            let tenureYears = parseInt(document.getElementById('tenure').value);
            let tenureMonths = tenureYears * 12;

            let principal = carPrice - downPayment;

            if (principal <= 0 || isNaN(principal) || rawInterest <= 0) {
                alert("Please enter valid loan parameters.");
                return;
            }

            // EMI Formula
            let emi = (principal * interestRate * Math.pow(1 + interestRate, tenureMonths)) /
                (Math.pow(1 + interestRate, tenureMonths) - 1);

            let totalRepayment = emi * tenureMonths;
            let totalInterest = totalRepayment - principal;

            // UI Updates: Remove placeholder colors and add "Live" colors
            const emiEl = document.getElementById('monthlyEMI');
            const card = document.getElementById('loanResult');
            const glow = document.getElementById('glowEffect');

            // Text Content Updates
            emiEl.innerText = Math.round(emi).toLocaleString();
            document.getElementById('emiDetails').innerText = `Fixed for ${tenureMonths} Months • ${rawInterest}% APR`;
            document.getElementById('loanAmount').innerText = 'NRs ' + principal.toLocaleString();
            document.getElementById('totalInterest').innerText = 'NRs ' + Math.round(totalInterest).toLocaleString();
            document.getElementById('totalRepayment').innerText = 'NRs ' + Math.round(totalRepayment).toLocaleString();

            // Visual Polish
            emiEl.classList.remove('text-slate-700');
            emiEl.classList.add('text-white');

            document.querySelectorAll('#loanResult span.text-slate-600').forEach(el => {
                el.classList.remove('text-slate-600');
                el.classList.add('text-white');
            });

            card.classList.add('shadow-green-900/20');
            glow.classList.replace('bg-green-500/5', 'bg-green-500/20');
        }
    </script>
@endsection
