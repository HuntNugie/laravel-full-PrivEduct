<x-app-layout>

   @if(auth()->user()->role == "admin")
        @include('page.isLogin.Dashboard-admin')
    @elseif(auth()->user()->role == "guru")
        @include('page.isLogin.Dashboard-guru')
    @elseif(auth()->user()->role == "user")
        @include('page.isLogin.Dashboard-user')
    @endif

</x-app-layout>