  <!-- Preview Postingan -->
    <div class="mt-8 rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

        <div class="flex items-center justify-between">

            <div>

                <h2 class="text-xl font-semibold text-stone-800">
                    Preview Postingan Terakhir
                </h2>

                <p class="mt-2 text-sm text-stone-500">
                    Tampilan postingan yang saat ini dilihat oleh calon siswa.
                </p>

            </div>

        </div>

        <div class="mt-8 flex flex-col gap-8 lg:flex-row">

            <!-- Foto -->
            <div class="lg:w-1/3">

                <img src="{{ asset('storage/'.$posting[0]->foto_cover) }}"
                    class="h-80 w-full rounded-3xl border border-stone-200 object-cover">

            </div>

            <!-- Konten -->
            <div class="flex-1">

                <h3 class="text-3xl font-semibold text-stone-800">
                    {{ Auth::user()->name }}
                </h3>

                <p class="mt-2 text-orange-500 font-medium">
                    {{ Auth::user()->guru->MataPelajarans()->pluck("nama_mapel")->join(" , ") }}
                </p>

                <p class="mt-6 leading-relaxed text-stone-600">
                    {{ $posting[0]->caption }}
                </p>

                <!-- Mode -->
                <div class="mt-6 flex flex-wrap gap-3">

                   @foreach ($posting[0]->metode_belajar as $jar )
                    @if($jar === "online")
                    <span class="rounded-full bg-orange-100 px-4 py-2 text-sm font-medium text-orange-700">

                        Online

                    </span>
                    @elseif($jar === "offline")
                    <span class="rounded-full bg-sky-100 px-4 py-2 text-sm font-medium text-sky-700">

                        Offline

                    </span>
                    @endif
                   @endforeach

                </div>

                <!-- Tarif -->
                <div class="mt-8">

                    <p class="text-sm text-stone-500">
                        Tarif Mengajar
                    </p>

                    <h4 class="mt-1 text-3xl font-semibold text-stone-800">
                        Rp {{ number_format($posting[0]->tarif, 0, ',', '.') }} / Sesi
                    </h4>

                </div>

            </div>

        </div>

    </div>