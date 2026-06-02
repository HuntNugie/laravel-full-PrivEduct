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

                <img src="{{ Auth::user()->profile_photo_url }}"
                    class="h-80 w-full rounded-3xl border border-stone-200 object-cover">

            </div>

            <!-- Konten -->
            <div class="flex-1">

                <h3 class="text-3xl font-semibold text-stone-800">
                    {{ Auth::user()->name }}
                </h3>

                <p class="mt-2 text-orange-500 font-medium">
                    Matematika, Fisika, Bahasa Inggris
                </p>

                <p class="mt-6 leading-relaxed text-stone-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo molestias laboriosam modi voluptates,
                    doloremque officia consectetur illo quisquam.
                </p>

                <!-- Mode -->
                <div class="mt-6 flex flex-wrap gap-3">

                    <span class="rounded-full bg-orange-100 px-4 py-2 text-sm font-medium text-orange-700">

                        Online

                    </span>

                    <span class="rounded-full bg-sky-100 px-4 py-2 text-sm font-medium text-sky-700">

                        Offline

                    </span>

                </div>

                <!-- Tarif -->
                <div class="mt-8">

                    <p class="text-sm text-stone-500">
                        Tarif Mengajar
                    </p>

                    <h4 class="mt-1 text-3xl font-semibold text-stone-800">
                        Rp 150.000 / Jam
                    </h4>

                </div>

            </div>

        </div>

    </div>