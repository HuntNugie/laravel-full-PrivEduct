   <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
       Dashboard
   </x-nav-link>

   <x-nav-link href="{{ route('user.checkout.index') }}" :active="request()->routeIs('user.checkout.index')">
       My Booking
   </x-nav-link>

   <x-nav-link href="#">
       Schedule
   </x-nav-link>

   <x-nav-link href="#">
       Tutors
   </x-nav-link>
