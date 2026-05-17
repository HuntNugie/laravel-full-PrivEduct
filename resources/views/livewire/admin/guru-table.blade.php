   <!-- Table Card -->
   <div class="mt-10 overflow-hidden rounded-3xl border border-stone-200 bg-white shadow-sm">

       <!-- Top -->
       <div class="flex flex-col gap-4 border-b border-stone-200 p-6 lg:flex-row lg:items-center lg:justify-between">

           <div>

               <h2 class="text-lg font-semibold text-stone-800">
                   Data Guru
               </h2>

               <p class="mt-1 text-sm text-stone-500">
                   Total guru saat ini : {{ count($gurus) }}
               </p>

           </div>

           <!-- Search -->
           <div class="w-full lg:w-80">

               <input type="text" placeholder="Cari guru..."
                   class="w-full rounded-2xl border border-stone-300 bg-stone-50 px-4 py-3 text-sm text-stone-700 outline-none transition focus:border-stone-500 focus:ring-2 focus:ring-stone-200">

           </div>

       </div>

       <!-- Table -->
       <div class="overflow-x-auto">

           <table class="min-w-full divide-y divide-stone-200">

               <!-- Head -->
               <thead class="bg-stone-50">

                   <tr>

                       <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-stone-500">
                           No
                       </th>
                       <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-stone-500">
                           Nama
                       </th>

                       <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-stone-500">
                           Lulusan
                       </th>

                       <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-stone-500">
                           Status
                       </th>

                       <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-stone-500">
                           Tanggal
                       </th>

                       <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-stone-500">
                           Aksi
                       </th>

                   </tr>

               </thead>

               <!-- Body -->
               <tbody class="divide-y divide-stone-100 bg-white">

                   @foreach ($gurus as $guru)
                       <tr class="transition hover:bg-stone-50">

                           <td class="px-6 py-5">
                               {{ $loop->iteration }}
                           </td>
                           <td class="px-6 py-5">

                               <div class="flex items-center gap-4">

                                   <div
                                       class="flex size-12 items-center justify-center rounded-2xl bg-stone-200 text-sm font-semibold text-stone-700">
                                       <img src="{{ $guru->User->profile_photo_url }}" alt="foto">
                                   </div>

                                   <div>

                                       <h3 class="font-medium text-stone-800">
                                           {{ $guru->User->name }}
                                       </h3>

                                       <p class="text-sm text-stone-500">
                                           {{ $guru->User->email }}
                                       </p>

                                   </div>

                               </div>

                           </td>

                           <td class="px-6 py-5 text-sm text-stone-600">
                               {{ $guru->lulusan }}
                           </td>

                           <td class="px-6 py-5">

                               @if ($guru->status == 'pending')
                                   <div
                                       class="inline-flex items-center gap-2 rounded-xl bg-yellow-50 px-4 py-2 text-xs font-medium text-yellow-700 transition hover:bg-yellow-100">
                                       Pending
                                   </div>
                               @elseif($guru->status == 'approved')
                                   <span
                                       class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">

                                       Active

                                   </span>
                               @elseif ($guru->status == 'rejected')
                                   <span
                                       class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700">

                                       Rejected
                                       <span />
                               @endif

                           </td>

                           <td class="px-6 py-5 text-sm text-stone-500">
                               {{ $guru->created_at->format('d M Y H:i') }}
                           </td>

                           <td class="px-6 py-5">

                               <div class="flex flex-wrap items-center justify-center gap-2">

                                   <button
                                       class="rounded-xl border border-stone-300 px-4 py-2 text-xs font-medium text-stone-700 transition hover:bg-stone-100">

                                       Detail

                                   </button>

                                   <a href="{{ route("guru.edit",$guru->id) }}"
                                       class="rounded-xl border border-blue-200 bg-blue-50 px-4 py-2 text-xs font-medium text-blue-700 transition hover:bg-blue-100">

                                       Edit

                                   </a>

                                   <button
                                       class="rounded-xl border border-red-200 bg-red-50 px-4 py-2 text-xs font-medium text-red-700 transition hover:bg-red-100">

                                       Hapus

                                   </button>

                                   <button
                                       class="rounded-xl border border-green-200 bg-green-50 px-4 py-2 text-xs font-medium text-green-700 transition hover:bg-green-100">

                                       Aktifkan

                                   </button>

                               </div>

                           </td>

                       </tr>
                   @endforeach
                   <!-- Item -->



               </tbody>

           </table>

       </div>

   </div>
