<nav x-data="{ open: false }" class="sticky top-0 z-50 border-b border-stone-200 bg-white/90 backdrop-blur">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="flex justify-between h-20">

            <!-- Left -->
            <div class="flex items-center gap-12">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3">

                        <div
                            class="size-10 rounded-2xl bg-stone-800 flex items-center justify-center text-white font-semibold text-sm">
                            PE
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-stone-800">
                                PrivEdu
                            </p>

                            <span class="text-xs text-stone-500">
                                Private Learning
                            </span>
                        </div>

                    </a>
                </div>

                <!-- Navigation -->
                <div class="hidden sm:flex items-center gap-8">

                    @if (auth()->user()->role === 'admin')
                      <x-partials.navbar-admin/>
                    @elseif (auth()->user()->role === 'guru')
                       <x-nav-link href="{{ route('dashboard') }}"
                        :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>

                    <x-nav-link href="#">
                        My Classes
                    </x-nav-link>

                    <x-nav-link href="#">
                        Schedule
                    </x-nav-link>

                    <x-nav-link href="#">
                        Tutors
                    </x-nav-link>
                    @elseif (auth()->user()->role == "user")
                      <x-partials.navbar-user/>
                    @endif

                </div>

            </div>

            <!-- Right -->
            <div class="hidden sm:flex sm:items-center gap-4">

                <!-- Profile Dropdown -->
                <div class="relative">

                    <x-dropdown align="right" width="56">

                        <x-slot name="trigger">

                            <button type="button"
                                class="inline-flex items-center gap-3 rounded-2xl border border-stone-200 bg-white px-4 py-2 text-sm font-medium text-stone-700 transition hover:bg-stone-50">

                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <img class="size-9 rounded-xl object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                @else
                                    <div
                                        class="size-9 rounded-xl bg-stone-200 flex items-center justify-center text-sm font-semibold text-stone-700">

                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

                                    </div>
                                @endif

                                <div class="text-left">

                                    <p class="text-sm font-medium text-stone-800">
                                        {{ Auth::user()->name }}
                                    </p>

                                    <span class="text-xs text-stone-500">
                                        Student Account
                                    </span>

                                </div>

                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-stone-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />

                                </svg>

                            </button>

                        </x-slot>

                        <x-slot name="content">

                            <div class="p-2">

                                <div class="px-4 py-3 border-b border-stone-100">

                                    <p class="text-sm font-medium text-stone-800">
                                        {{ Auth::user()->name }}
                                    </p>

                                    <p class="text-xs text-stone-500 mt-1">
                                        {{ Auth::user()->email }}
                                    </p>

                                </div>

                                <div class="py-2">

                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        Profile Settings
                                    </x-dropdown-link>

                                </div>

                                <div class="border-t border-stone-100"></div>

                                <form method="POST" action="{{ route('logout') }}" x-data>

                                    @csrf

                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">

                                        Log Out

                                    </x-dropdown-link>

                                </form>

                            </div>

                        </x-slot>

                    </x-dropdown>

                </div>

            </div>

            <!-- Mobile Button -->
            <div class="flex items-center sm:hidden">

                <button @click="open = ! open"
                    class="inline-flex items-center justify-center rounded-xl p-2 text-stone-500 transition hover:bg-stone-100 hover:text-stone-700">

                    <svg class="size-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">

                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />

                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />

                    </svg>

                </button>

            </div>

        </div>

    </div>

    <!-- Mobile Navigation -->
    <div x-show="open" x-transition class="sm:hidden border-t border-stone-200 bg-white">

        <div class="space-y-1 px-6 py-4">

            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">

                Dashboard

            </x-responsive-nav-link>

            <x-responsive-nav-link href="#">
                My Classes
            </x-responsive-nav-link>

            <x-responsive-nav-link href="#">
                Schedule
            </x-responsive-nav-link>

            <x-responsive-nav-link href="#">
                Tutors
            </x-responsive-nav-link>

        </div>

        <div class="border-t border-stone-200 px-6 py-4">

            <div class="mb-4">

                <p class="text-sm font-medium text-stone-800">
                    {{ Auth::user()->name }}
                </p>

                <p class="text-xs text-stone-500 mt-1">
                    {{ Auth::user()->email }}
                </p>

            </div>

            <div class="space-y-1">

                <x-responsive-nav-link href="{{ route('profile.show') }}">

                    Profile Settings

                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();">

                        Log Out

                    </x-responsive-nav-link>

                </form>

            </div>

        </div>

    </div>

</nav>'
