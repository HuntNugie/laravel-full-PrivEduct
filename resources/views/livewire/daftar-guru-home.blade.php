 <!-- GRID -->
 <div class="mt-20 grid md:grid-cols-2 xl:grid-cols-3 gap-8">
         @forelse ($gurus as $guru)

         <!-- CARD -->
         <div
             class="bg-white rounded-[36px] border border-slate-100 overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-1 transition duration-300">

             <!-- IMAGE -->
             <div class="h-80 bg-gradient-to-br from-sky-100 to-orange-100 relative">

                <img src="{{ $guru->User->profile_photo_url }}" alt="" class="w-full h-full object-cover">
                 <div
                     class="absolute top-6 right-6 px-4 py-2 rounded-2xl bg-white text-orange-500 text-sm font-bold shadow-lg">

                     4.9 Rating

                 </div>

             </div>

             <!-- CONTENT -->
             <div class="p-8">

                 <div class="flex items-start justify-between gap-4">

                     <div>

                         <h3 class="text-2xl font-black text-slate-900">
                            {{$guru->User->name}}
                         </h3>

                         <p class="mt-2 text-orange-500 font-semibold">
                             Guru {{ $guru->MataPelajarans->pluck("nama_mapel")->join(" , ") }}
                         </p>

                     </div>

                     <div class="text-right">

                         <p class="text-sm text-slate-500">
                             Mulai Dari
                         </p>

                         <h4 class="text-xl font-black text-slate-900">
                             Rp120K
                         </h4>

                     </div>

                 </div>

                 <p class="mt-6 text-slate-600 leading-8">
                     Berpengalaman mengajar private siswa SMP dan SMA
                     dengan metode pembelajaran yang lebih fokus dan personal.
                 </p>

                 <!-- TAG -->
                 <div class="mt-6 flex flex-wrap gap-3">

                     <span class="px-4 py-2 rounded-xl bg-orange-50 text-orange-600 text-sm font-semibold">
                         Offline
                     </span>

                     <span class="px-4 py-2 rounded-xl bg-sky-50 text-sky-600 text-sm font-semibold">
                         Online
                     </span>

                 </div>

                 <!-- FOOTER -->
                 <div class="mt-8 flex items-center justify-between">

                     <div>

                         <p class="text-sm text-slate-500">
                             Experience
                         </p>

                         <h4 class="mt-1 font-black text-slate-900">
                             5 Tahun
                         </h4>

                     </div>

                     <button
                         class="px-6 py-4 rounded-2xl bg-orange-500 hover:bg-orange-600 text-white font-bold shadow-xl shadow-orange-200 transition">

                         Lihat Profile

                     </button>

                 </div>

             </div>

         </div>

         <!-- DUPLICATE CARD -->
         <!-- nanti tinggal looping -->

         @empty
         
         @endforelse
        </div>
