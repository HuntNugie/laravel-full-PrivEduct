   <!-- Status -->
   <div class="mt-8 grid gap-6 md:grid-cols-2">

       <!-- Review Status -->
       <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

           <p class="text-sm text-stone-500">
               Status Review
           </p>

           @if ($posting[0]->status_review === 'pending')
               <span class="mt-3 inline-flex rounded-full bg-yellow-100 px-4 py-2 text-sm font-medium text-yellow-700">

                   Pending Review

               </span>
           @elseif ($posting[0]->status_review === 'accepted')
               <span class="mt-3 inline-flex rounded-full bg-green-100 px-4 py-2 text-sm font-medium text-green-700">

                   Accepted Review

               </span>
           @elseif($posting[0]->status_review === 'rejected')
               <span class="mt-3 inline-flex rounded-full bg-red-100 px-4 py-2 text-sm font-medium text-red-700">

                   Rejected Review

               </span>
           @endif
           <p class="mt-4 text-sm text-stone-500">
               Postingan sedang menunggu persetujuan admin.
           </p>

       </div>

       <!-- Publish Status -->
       <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

           <p class="text-sm text-stone-500">
               Status Posting
           </p>

           @if ($posting[0]->status_publish === 'published')
               <span class="mt-3 inline-flex rounded-full bg-green-100 px-4 py-2 text-sm font-medium text-green-700">

                   Tidak Terposting

               </span>
           @else
               <span class="mt-3 inline-flex rounded-full bg-red-100 px-4 py-2 text-sm font-medium text-red-700">

                   Tidak Terposting

               </span>
           @endif

           <p class="mt-4 text-sm text-stone-500">
               Postingan belum tampil pada halaman pencarian guru.
           </p>

       </div>

   </div>
