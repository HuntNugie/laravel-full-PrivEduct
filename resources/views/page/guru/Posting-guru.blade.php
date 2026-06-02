<x-app-layout>

    <div class="max-w-5xl mx-auto px-6 lg:px-8 py-16">

        <div class="rounded-3xl border border-stone-200 bg-white p-12 shadow-sm text-center">

            <!-- Icon -->
            <div class="mx-auto flex h-24 w-24 items-center justify-center rounded-full bg-stone-100">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-12 w-12 text-stone-500"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M19 11H5m14-7H9a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2z" />

                </svg>

            </div>

            <!-- Title -->
            <h1 class="mt-8 text-3xl font-semibold text-stone-800">
                Belum Ada Postingan
            </h1>

            <!-- Description -->
            <p class="mt-4 max-w-2xl mx-auto text-stone-600 leading-relaxed">

                Saat ini Anda belum memiliki postingan guru yang dapat ditampilkan
                kepada siswa. Buat postingan pertama Anda untuk memperkenalkan
                diri, menampilkan pengalaman mengajar, mata pelajaran yang dikuasai,
                metode belajar, serta informasi lainnya.

            </p>

            <!-- Info Box -->
            <div
                class="mt-8 rounded-2xl border border-orange-200 bg-orange-50 p-6 text-left max-w-3xl mx-auto">

                <h2 class="font-medium text-orange-700">
                    Yang perlu disiapkan:
                </h2>

                <ul class="mt-4 space-y-2 text-sm text-orange-600">

                    <li>• Deskripsi atau caption profil guru</li>

                    <li>• Metode belajar (Online / Offline)</li>

                    <li>• Pengalaman mengajar</li>

                    <li>• Tarif mengajar</li>

                    <li>• Sertifikat pendukung (opsional)</li>

                    <li>• Informasi tambahan yang ingin ditampilkan kepada siswa</li>

                </ul>

            </div>

            <!-- Button -->
            <div class="mt-10">

                <a href="{{ route("posting.create") }}"
                    class="inline-flex items-center justify-center rounded-2xl bg-stone-800 px-8 py-4 text-sm font-medium text-white transition hover:bg-stone-700">

                    Buat Postingan Pertama

                </a>

            </div>

        </div>

    </div>

</x-app-layout>