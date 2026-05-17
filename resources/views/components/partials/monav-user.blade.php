  <div x-show="open" x-transition class="sm:hidden border-t border-stone-200 bg-white">

      <div class="space-y-1 px-6 py-4">

          <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">

              Dashboard

          </x-responsive-nav-link>

          <x-responsive-nav-link href="{{ route('guru') }}" :active="request()->routeIs('guru')">
              Daftar Guru
          </x-responsive-nav-link>


          <x-responsive-nav-link href="#">
              Daftar Siswa
          </x-responsive-nav-link>

          <x-responsive-nav-link href="#">
              Daftar Booking
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
