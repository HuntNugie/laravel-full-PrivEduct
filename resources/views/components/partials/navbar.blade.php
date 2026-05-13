  <header class="fixed top-0 left-0 w-full z-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-5">

            <div class="h-20 px-8 rounded-3xl border border-slate-200 bg-white/90 backdrop-blur-xl shadow-sm flex items-center justify-between">

                <!-- LOGO -->
                <a href="{{ route('home') }}" class="flex items-center gap-3">

                    <div class="w-12 h-12 rounded-2xl bg-orange-500 flex items-center justify-center text-white font-black text-xl shadow-lg shadow-orange-200">
                        P
                    </div>

                    <div>

                        <h1 class="font-black text-xl tracking-tight">
                            PrivEduct
                        </h1>

                        <p class="text-xs text-slate-500">
                            Private Education Platform
                        </p>

                    </div>

                </a>

                <!-- MENU -->
                <nav class="hidden lg:flex items-center gap-10">

                    <a href="#beranda"
                        class="nav-link text-orange-500 text-sm font-semibold transition">
                        Beranda
                    </a>

                    <a href="#layanan"
                        class="nav-link text-slate-700 hover:text-orange-500 text-sm font-semibold transition">
                        Layanan
                    </a>

                    <a href="#guru"
                        class="nav-link text-slate-700 hover:text-orange-500 text-sm font-semibold transition">
                        Cari Guru
                    </a>

                    <a href="#tentang"
                        class="nav-link text-slate-700 hover:text-orange-500 text-sm font-semibold transition">
                        Tentang
                    </a>

                    <a href="#kontak"
                        class="nav-link text-slate-700 hover:text-orange-500 text-sm font-semibold transition">
                        Kontak
                    </a>

                </nav>

                <!-- BUTTON -->
                @auth
                    <div class="relative group">
                        <button type="button" class="flex items-center gap-3 px5 py-3 rounded-2xl bg-orange-500 hover:bg-orange-600 text-white text-sm font-bold shadow-xl shadow-orange-200 transition">
                            <img src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&background=F97316&color=ffffff' }}" alt="{{ Auth::user()->name }}" class="w-9 h-9 rounded-full object-cover border border-white shadow-sm">
                            <span>{{ Auth::user()->name }}</span>
                        </button>
                        <div class="absolute right-0 mt-3 w-52 rounded-3xl border border-slate-200 bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="px-4 py-3 border-b border-slate-100">
                                <p class="text-sm font-semibold text-slate-800">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-slate-500">Selamat datang</p>
                            </div>
                            <a href="{{ route('dashboard') }}" class="block px-4 py-3 text-sm text-slate-700 hover:bg-slate-50">Dashboard</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-3 text-sm text-slate-700 hover:bg-slate-50">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <button class="px-6 py-3 rounded-2xl bg-orange-500 hover:bg-orange-600 text-white text-sm font-bold shadow-xl shadow-orange-200 transition">
                        <a href="{{ route('login') }}">Mulai belajar</a>
                    </button>
                @endauth

            </div>

        </div>

    </header>