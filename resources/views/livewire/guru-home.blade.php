   <div class="mt-20 grid md:grid-cols-2 xl:grid-cols-3 gap-8">

       <!-- CARD -->
       @foreach ($gurus as $guru)
           <div
               class="bg-white rounded-[36px] border border-slate-100 overflow-hidden shadow-sm hover:shadow-2xl transition">
               <div class="h-72 ">
                   <img class="w-full h-full object-cover" src="{{ asset('/storage/' . $guru->foto_cover) }}" alt="{{ $guru->guru->User->name }}">
               </div>
               <div class="p-8">

                   <div class="flex items-start justify-between gap-4">

                       <div>

                           <h3 class="text-2xl font-black text-slate-900">
                               {{ $guru->guru->User->name }}
                           </h3>

                           <p class="mt-2 text-orange-500 font-semibold">
                               {{ $guru->guru->MataPelajarans->pluck('nama_mapel')->join(' , ') }}
                           </p>

                       </div>

                       <div class="text-right">

                           <p class="text-sm text-slate-500">
                               Mulai Dari
                           </p>

                           <h4 class="text-xl font-black text-slate-900">
                               Rp. {{ number_format($guru->tarif, 0, ',') }} / sesi
                           </h4>

                       </div>

                   </div>

                   <p class="mt-6 text-slate-600 leading-8">
                       {{ $guru->caption }}
                   </p>

                   <div class="mt-6 flex flex-wrap gap-3">

                       @foreach ($guru->metode_belajar as $jar)
                           @if ($jar === 'offline')
                               <span class="px-4 py-2 rounded-xl bg-orange-50 text-orange-600 text-sm font-semibold">
                                   Offline
                               </span>
                           @else
                               <span class="px-4 py-2 rounded-xl bg-sky-50 text-sky-600 text-sm font-semibold">
                                   Online
                               </span>
                           @endif
                       @endforeach
                   </div>

               </div>

           </div>
       @endforeach

   </div>
