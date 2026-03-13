<header class="fixed top-0 left-0 w-full flex justify-center pt-4 md:pt-6 z-50">
    <nav
        class="w-[92%] max-w-7xl bg-white/80 backdrop-blur-xl border border-white/40 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] px-4 md:px-6 py-3 flex items-center justify-between transition-all duration-300">

        <div class="hidden lg:flex items-center">
            <div class="flex space-x-1 text-[14px] font-bold text-slate-800">
                <a href="{{ route('marketplace') }}"
                    class="px-4 py-2 rounded-xl transition-all relative group {{ Route::is('marketplace') ? 'text-green-600 bg-green-50/50' : 'hover:bg-slate-50' }}">
                    Marketplace
                </a>
                <a href="{{ route('news') }}"
                    class="px-4 py-2 rounded-xl transition-all relative group {{ Route::is('news') ? 'text-green-600 bg-green-50/50' : 'hover:bg-slate-50' }}">
                    News
                </a>
                <a href="{{ route('loan_calculator') }}"
                    class="px-4 py-2 rounded-xl transition-all relative group {{ Route::is('loan_calculator') ? 'text-green-600 bg-green-50/50' : 'hover:bg-slate-50' }}">
                    Loan Calculator
                </a>
                <a href="{{ route('compare_cars') }}"
                    class="px-4 py-2 rounded-xl transition-all relative group {{ Route::is('compare_cars') ? 'text-green-600 bg-green-50/50' : 'hover:bg-slate-50' }}">
                    Compare Cars
                </a>
            </div>
        </div>

        <div class="flex items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2 no-underline group">
                <div
                    class="w-9 h-9 bg-slate-900 rounded-lg flex items-center justify-center group-hover:bg-[#16a34a] transition-all duration-500 shadow-lg group-hover:rotate-[360deg]">
                    <span class="text-white font-bold text-sm italic">BC</span>
                </div>
                <span class="text-lg md:text-xl font-extrabold tracking-tighter text-slate-900 uppercase">bijuli<span
                        class="text-[#16a34a]">car</span></span>
            </a>
        </div>

        <div class="flex items-center space-x-2 md:space-x-4">
            <div class="hidden lg:flex items-center space-x-2">
                <a href="{{ route('map_location') }}"
                    class="px-3 py-2 rounded-xl text-[14px] font-bold {{ Route::is('map_location') ? 'text-green-600 bg-green-50' : 'text-slate-800 hover:bg-slate-50' }}">Map Search</a>
                <a href="{{ route('contact') }}"
                    class="px-3 py-2 rounded-xl text-[14px] font-bold {{ Route::is('contact') ? 'text-green-600 bg-green-50' : 'text-slate-800 hover:bg-slate-50' }}">Contact</a>
                <div class="h-6 w-[1px] bg-slate-200 mx-2"></div>
                <a href="{{ route('user-login') }}" class="text-[14px] font-bold text-slate-900 px-3">Login</a>
            </div>

            <a href="{{ route('user-registration') }}"
                class="hidden sm:inline-flex items-center justify-center bg-[#4ade80] text-black px-5 py-2.5 rounded-xl text-[13px] font-black shadow-lg shadow-green-400/20 hover:bg-[#22c55e] transition-all active:scale-95">
                Sign Up
            </a>

            <button onclick="toggleMobileMenu()"
                class="lg:hidden w-10 h-10 flex items-center justify-center bg-slate-100 rounded-xl text-slate-900">
                <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-transform"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobileMenu" class="fixed inset-0 z-[-1] invisible opacity-0 transition-all duration-300">
        <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm" onclick="toggleMobileMenu()"></div>

        <div class="absolute top-24 left-1/2 -translate-x-1/2 w-[92%] bg-white rounded-[2rem] p-6 shadow-2xl border border-slate-100 transform scale-95 transition-transform duration-300 origin-top"
            id="menuCard">
            <div class="flex flex-col space-y-2">
                <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-2 ml-4">Explore BijuliCar
                </p>

                <a href="{{ route('marketplace') }}"
                    class="flex items-center justify-between p-4 rounded-2xl {{ Route::is('marketplace') ? 'bg-green-50 text-green-600' : 'bg-slate-50 text-slate-700' }}">
                    <span class="font-bold">Marketplace</span>
                    <span class="text-lg">⚡</span>
                </a>

                <a href="{{ route('loan_calculator') }}"
                    class="flex items-center justify-between p-4 rounded-2xl {{ Route::is('loan_calculator') ? 'bg-green-50 text-green-600' : 'bg-slate-50 text-slate-700' }}">
                    <span class="font-bold">Loan Calculator</span>
                    <span class="text-lg">💳</span>
                </a>

                <a href="{{ route('map_location') }}"
                    class="flex items-center justify-between p-4 rounded-2xl {{ Route::is('map_location') ? 'bg-green-50 text-green-600' : 'bg-slate-50 text-slate-700' }}">
                    <span class="font-bold">Map Search</span>
                    <span class="text-lg">📍</span>
                </a>

                <a href="{{ route('news') }}"
                    class="flex items-center justify-between p-4 rounded-2xl {{ Route::is('news') ? 'bg-green-50 text-green-600' : 'bg-slate-50 text-slate-700' }}">
                    <span class="font-bold">News & Updates</span>
                    <span class="text-lg">📰</span>
                </a>

                <div class="h-px bg-slate-100 my-2"></div>

                <div class="grid grid-cols-2 gap-3 pt-2">
                    <a href="{{ route('user-login') }}"
                        class="flex items-center justify-center py-4 rounded-2xl bg-slate-100 text-slate-900 font-bold text-sm">Login</a>
                    <a href="{{ route('user-registration') }}"
                        class="flex items-center justify-center py-4 rounded-2xl bg-[#4ade80] text-black font-black text-sm shadow-lg shadow-green-400/20">Sign
                        Up</a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        const card = document.getElementById('menuCard');
        const icon = document.getElementById('menuIcon');

        if (menu.classList.contains('invisible')) {
            // Open
            menu.classList.remove('invisible', 'opacity-0');
            card.classList.remove('scale-95');
            card.classList.add('scale-100');
            icon.innerHTML =
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
        } else {
            // Close
            menu.classList.add('opacity-0');
            card.classList.add('scale-95');
            icon.innerHTML =
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
            setTimeout(() => {
                menu.classList.add('invisible');
            }, 300);
        }
    }
</script>
