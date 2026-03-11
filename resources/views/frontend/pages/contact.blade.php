@extends('frontend.app')

@section('content')
    {{-- header section --}}
    <section class="relative bg-[#0a0f1e] pt-[120px] pb-16 lg:pt-40 lg:pb-28 overflow-hidden">

        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1583267746897-2cf415887172?auto=format&fit=crop&q=80&w=2071"
                class="w-full h-full object-cover opacity-70 scale-105" alt="Contact Background">

            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0f1e] via-[#0a0f1e]/40 to-[#0a0f1e]/80"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_transparent_0%,_#0a0f1e_100%)]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div class="space-y-8">
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="w-12 h-[2px] bg-[#4ade80]"></span>
                            <span class="text-[10px] uppercase tracking-[0.4em] text-[#4ade80] font-black">Liaison
                                Office</span>
                        </div>
                        <h1
                            class="text-5xl md:text-7xl font-black text-white uppercase italic tracking-tighter leading-[0.85]">
                            Get In <br>
                            <span class="text-slate-500">The Orbit</span>
                        </h1>
                        <p class="text-slate-400 text-sm md:text-base max-w-sm font-medium leading-relaxed">
                            Connect with our automotive specialists for fleet inquiries, technical support, or showroom
                            appointments.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div
                            class="flex items-center gap-4 p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md">
                            <div class="w-10 h-10 rounded-xl bg-[#4ade80]/10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-[#4ade80]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[9px] font-black text-slate-500 uppercase tracking-widest">Hotline</p>
                                <p class="text-xs font-black text-white">+977-01-XXXXXXX</p>
                            </div>
                        </div>

                        <div
                            class="flex items-center gap-4 p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md">
                            <div class="w-10 h-10 rounded-xl bg-blue-500/10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[9px] font-black text-slate-500 uppercase tracking-widest">Operation</p>
                                <p class="text-xs font-black text-white">09:00 - 18:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:flex justify-end">
                    <div class="w-full max-w-sm bg-gradient-to-br from-white/10 to-transparent p-px rounded-[2.5rem]">
                        <div class="bg-[#0a0f1e]/80 backdrop-blur-3xl rounded-[2.5rem] p-10 relative overflow-hidden">
                            <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#4ade80]/10 rounded-full blur-3xl"></div>

                            <div class="relative z-10 space-y-6">
                                <div class="space-y-1">
                                    <h3 class="text-white font-black uppercase italic tracking-widest text-lg">Support
                                        Status</h3>
                                    <div class="flex items-center gap-2">
                                        <span class="w-2 h-2 rounded-full bg-[#4ade80] animate-pulse"></span>
                                        <span
                                            class="text-[10px] text-[#4ade80] font-bold uppercase tracking-[0.2em]">Systems
                                            Nominal</span>
                                    </div>
                                </div>

                                <p class="text-slate-400 text-sm leading-relaxed">
                                    Our average response time for technical inquiries is currently <span
                                        class="text-white font-bold text-italic">45 minutes</span>.
                                </p>

                                <div class="pt-6 border-t border-white/10">
                                    <p class="text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4">Global
                                        HQ</p>
                                    <p class="text-sm text-white font-medium">
                                        BijuliCar Plaza, <br>
                                        Naxal, Kathmandu, Nepal
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-[#f8fafc] relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>
        <div class="absolute inset-0 z-0 opacity-40">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#4ade80]/5 blur-[120px] rounded-full"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div
                    class="group p-8 rounded-[2.5rem] bg-white border border-slate-200 hover:border-[#4ade80] hover:shadow-2xl hover:shadow-[#4ade80]/10 transition-all duration-500">
                    <div
                        class="w-14 h-14 bg-[#4ade80]/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#4ade80] transition-all duration-500 group-hover:rotate-6">
                        <svg class="w-6 h-6 text-[#4ade80] group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-slate-900 font-black uppercase italic tracking-wider mb-2">Email Us</h3>
                    <p class="text-[#16a34a] text-sm font-bold mb-4">support@bijulicar.com</p>
                    <p class="text-slate-500 text-xs font-semibold leading-relaxed">Encrypted support line. We respond
                        within 24 hours.</p>
                </div>

                <div
                    class="group p-8 rounded-[2.5rem] bg-white border border-slate-200 hover:border-blue-500 hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-500">
                    <div
                        class="w-14 h-14 bg-blue-50/80 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-all duration-500 group-hover:rotate-6">
                        <svg class="w-6 h-6 text-blue-600 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="text-slate-900 font-black uppercase italic tracking-wider mb-2">Call Us</h3>
                    <p class="text-slate-900 text-sm font-bold mb-4">+1 (555) 123-4567</p>
                    <p class="text-slate-500 text-xs font-semibold leading-relaxed">Mon-Fri 9AM-6PM PST.</p>
                </div>

                <div
                    class="group p-8 rounded-[2.5rem] bg-white border border-slate-200 hover:border-[#4ade80] hover:shadow-2xl hover:shadow-[#4ade80]/10 transition-all duration-500">
                    <div
                        class="w-14 h-14 bg-[#4ade80]/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-[#4ade80] transition-all duration-500 group-hover:rotate-6">
                        <svg class="w-6 h-6 text-[#4ade80] group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                    </div>
                    <h3 class="text-slate-900 font-black uppercase italic tracking-wider mb-2">Visit Us</h3>
                    <p class="text-slate-900 text-sm font-bold mb-4">123 Electric Avenue</p>
                    <p class="text-slate-500 text-xs font-semibold leading-relaxed">Our headquarters in the heart of Silicon
                        Valley.</p>
                </div>

                <div
                    class="group p-8 rounded-[2.5rem] bg-white border border-slate-200 hover:border-slate-900 hover:shadow-2xl hover:shadow-slate-900/10 transition-all duration-500">
                    <div
                        class="w-14 h-14 bg-slate-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-slate-900 transition-all duration-500 group-hover:rotate-6">
                        <svg class="w-6 h-6 text-slate-600 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-slate-900 font-black uppercase italic tracking-wider mb-2">Business Hours</h3>
                    <p class="text-slate-900 text-sm font-bold mb-4">Mon-Fri: 9AM-6PM</p>
                    <p class="text-slate-500 text-xs font-semibold leading-relaxed">Weekend support available via email.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <div class="grid lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2 bg-[#1e293b] border border-slate-700 rounded-[2.5rem] p-10">
        <h2 class="text-3xl font-black text-white uppercase italic tracking-tighter mb-8">Direct <span class="text-[#4ade80]">Inquiry</span></h2>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Full Name</label>
                <div class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500 italic font-black text-xs">ID</span>
                    <input type="text" class="w-full bg-slate-900/50 border border-slate-700 rounded-xl pl-10 pr-4 py-3 text-white focus:border-[#4ade80] outline-none">
                </div>
            </div>
            </div>

        <button class="w-full mt-8 py-4 bg-white text-black rounded-xl font-black uppercase italic tracking-[0.2em] text-sm hover:bg-[#4ade80] transition-all flex items-center justify-center gap-3">
            Initialize Transmission
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7" stroke-width="3"/></svg>
        </button>
    </div>

    <div class="bg-red-500/10 border border-red-500/20 rounded-[2.5rem] p-10 flex flex-col justify-between">
        <div class="space-y-4">
            <div class="w-12 h-12 bg-red-500 rounded-2xl flex items-center justify-center animate-pulse shadow-[0_0_20px_rgba(239,68,68,0.4)]">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-width="2"/></svg>
            </div>
            <h3 class="text-white font-black uppercase italic tracking-wider text-xl">Rapid Response</h3>
            <p class="text-red-200/60 text-sm font-medium leading-relaxed">For urgent technical failures affecting vehicle safety or security.</p>
        </div>

        <div class="pt-8 border-t border-red-500/20">
            <p class="text-[10px] font-black text-red-400 uppercase tracking-[0.3em] mb-2">Priority Line</p>
            <a href="tel:+1555911HELP" class="text-2xl font-black text-white hover:text-red-400 transition-colors tracking-tighter">+1 (555) 911-HELP</a>
        </div>
    </div>
</div>

    <section class="py-24 bg-[#1e293b] relative overflow-hidden">
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-[#4ade80]/5 blur-[120px] rounded-full"></div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#4ade80]"></span>
                    <span class="text-[10px] uppercase tracking-[0.3em] text-slate-300 font-bold">Support Center</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-white uppercase italic tracking-tighter">
                    Frequently Asked <span class="text-slate-500">Questions</span>
                </h2>
            </div>

            <div class="space-y-4">

                <div
                    class="group rounded-2xl bg-slate-800/40 border border-slate-700 hover:border-[#4ade80]/30 transition-all duration-300">
                    <details class="p-6">
                        <summary class="flex items-center justify-between cursor-pointer list-none">
                            <span
                                class="text-lg font-bold text-white tracking-tight group-hover:text-[#4ade80] transition-colors">
                                How do I list my electric vehicle?
                            </span>
                            <div
                                class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-[#4ade80]/10 transition-colors">
                                <svg class="w-5 h-5 text-slate-400 group-hover:text-[#4ade80]" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </summary>
                        <div class="mt-4 pt-4 border-t border-white/5">
                            <p class="text-slate-400 leading-relaxed font-medium">
                                Simply click the <span class="text-white italic">“Sell”</span> button in the header, create
                                an account if you haven't already, and follow our streamlined step-by-step listing process.
                            </p>
                        </div>
                    </details>
                </div>

                <div
                    class="group rounded-2xl bg-slate-800/40 border border-slate-700 hover:border-[#4ade80]/30 transition-all duration-300">
                    <details class="p-6">
                        <summary class="flex items-center justify-between cursor-pointer list-none">
                            <span
                                class="text-lg font-bold text-white tracking-tight group-hover:text-[#4ade80] transition-colors">
                                Is there a fee to list my vehicle?
                            </span>
                            <div
                                class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-[#4ade80]/10 transition-colors">
                                <svg class="w-5 h-5 text-slate-400 group-hover:text-[#4ade80]" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </summary>
                        <div class="mt-4 pt-4 border-t border-white/5">
                            <p class="text-slate-400 leading-relaxed font-medium">
                                Basic listings are <span class="text-[#4ade80] font-bold">free</span>. We offer premium
                                listing options with enhanced visibility and top-of-page placement for a small professional
                                fee.
                            </p>
                        </div>
                    </details>
                </div>

                <div
                    class="group rounded-2xl bg-slate-800/40 border border-slate-700 hover:border-[#4ade80]/30 transition-all duration-300">
                    <details class="p-6">
                        <summary class="flex items-center justify-between cursor-pointer list-none">
                            <span
                                class="text-lg font-bold text-white tracking-tight group-hover:text-[#4ade80] transition-colors">
                                How do I contact a seller?
                            </span>
                            <div
                                class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-[#4ade80]/10 transition-colors">
                                <svg class="w-5 h-5 text-slate-400 group-hover:text-[#4ade80]" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </summary>
                        <div class="mt-4 pt-4 border-t border-white/5">
                            <p class="text-slate-400 leading-relaxed font-medium">
                                Click on any vehicle listing and use the <span class="text-white">secure contact
                                    form</span> or direct phone number provided by the seller in the unit overview.
                            </p>
                        </div>
                    </details>
                </div>

                <div
                    class="group rounded-2xl bg-slate-800/40 border border-slate-700 hover:border-[#4ade80]/30 transition-all duration-300">
                    <details class="p-6">
                        <summary class="flex items-center justify-between cursor-pointer list-none">
                            <span
                                class="text-lg font-bold text-white tracking-tight group-hover:text-[#4ade80] transition-colors">
                                Can I list non-electric vehicles?
                            </span>
                            <div
                                class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center group-hover:bg-[#4ade80]/10 transition-colors">
                                <svg class="w-5 h-5 text-slate-400 group-hover:text-[#4ade80]" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </summary>
                        <div class="mt-4 pt-4 border-t border-white/5">
                            <p class="text-slate-400 leading-relaxed font-medium">
                                Yes! Our ecosystem is built for the future but respects the present. We accept <span
                                    class="text-white">electric vehicles, hybrids, and traditional ICE</span> vehicles on
                                our platform.
                            </p>
                        </div>
                    </details>
                </div>

            </div>

            <div class="mt-16 text-center">
                <p class="text-slate-500 text-sm font-medium">
                    Still have questions?
                    <a href="#"
                        class="text-[#4ade80] border-b border-[#4ade80]/30 hover:border-[#4ade80] transition-all ml-1">Speak
                        to a Specialist</a>
                </p>
            </div>
        </div>
    </section>
@endsection
