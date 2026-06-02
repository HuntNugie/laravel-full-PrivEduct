   <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
       Dashboard
   </x-nav-link>

   @if (auth()->user()->guru->isApproved())
       <x-nav-link href="{{ route('posting') }}" disabled="{{ true }}" :active="request()->routeIs('posting')">
           Posting
       </x-nav-link>

       <x-nav-link href="#">
           Schedule
       </x-nav-link>

       <x-nav-link href="#">
           Tutors
       </x-nav-link>
   @endif
