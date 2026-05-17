<div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">
    <!-- Dashboard Header -->
   @if(auth()->user()->guru->status === "pending")
        @include("page.guru.Dashboard-guru-pending")
    @elseif(auth()->user()->guru->status === "rejected")
        @include("page.guru.Dashboard-guru-rejected")
    @else
        @include("page.guru.Dashboard-guru-approved")
    @endif
</div>