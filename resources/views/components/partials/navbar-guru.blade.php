   <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
       Dashboard
   </x-nav-link>

   @if (auth()->user()->guru->isApproved())
       <x-nav-link href="#" disabled="{{ true }}">
           My Classes
       </x-nav-link>

       <x-nav-link href="#">
           Schedule
       </x-nav-link>

       <x-nav-link href="#">
           Tutors
       </x-nav-link>
   @endif
