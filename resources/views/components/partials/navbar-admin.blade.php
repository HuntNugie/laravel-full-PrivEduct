   <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
       Dashboard
   </x-nav-link>

   <x-nav-link href="{{ route('guru') }}" :active="request()->routeIs('guru')">
       Daftar Guru
   </x-nav-link>

   <x-nav-link href="#">
       Daftar Siswa
   </x-nav-link>

   <x-nav-link href="#">
      Daftar Booking
   </x-nav-link>
