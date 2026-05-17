<x-app-layout>

   @if(auth()->user()->role == "admin")
        @include('page.admin.Dashboard-admin')
    @elseif(auth()->user()->role == "guru")
        @include('page.guru.Dashboard-guru')
    @elseif(auth()->user()->role == "user")
        @include('page.user.Dashboard-user')
    @endif

</x-app-layout>