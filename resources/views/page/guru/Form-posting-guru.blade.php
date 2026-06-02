<x-app-layout>

    <div class="max-w-5xl mx-auto px-6 lg:px-8 py-10">

        <!-- Header -->
        <div>

            <p class="text-sm font-medium text-orange-500">
                Teacher Posting
            </p>

            <h1 class="mt-1 text-4xl font-semibold text-stone-800">
                Buat Postingan Guru
            </h1>

            <p class="mt-3 text-stone-600">
                Lengkapi informasi yang akan ditampilkan kepada calon siswa.
            </p>

        </div>

        <form
            action=""
            method="POST"
            enctype="multipart/form-data"
            class="mt-10 space-y-8">

            @csrf

            <!-- Cover -->
            <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                <x-label
                    for="cover"
                    value="Foto Cover"
                    class="text-sm font-medium text-stone-700" />

                <input
                    type="file"
                    name="cover"
                    id="cover"
                    accept="image/*"
                    class="mt-3 block w-full text-sm text-stone-600">

            </div>

            <!-- Caption -->
            <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                <x-label
                    for="caption"
                    value="Tentang Saya"
                    class="text-sm font-medium text-stone-700" />

                <textarea
                    id="caption"
                    name="caption"
                    rows="6"
                    class="mt-3 block w-full rounded-2xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                    placeholder="Ceritakan pengalaman dan keunggulan Anda...">{{ old('caption') }}</textarea>

            </div>

            <!-- Tarif -->
            <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                <x-label
                    for="tarif"
                    value="Tarif Mengajar per Jam"
                    class="text-sm font-medium text-stone-700" />

                <x-input
                    type="number"
                    id="tarif"
                    name="tarif"
                    min="0"
                    class="mt-3 block w-full rounded-xl"
                    :value="old('tarif')" />

            </div>

            <!-- Mode Belajar -->
            <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                <x-label
                    value="Metode Belajar"
                    class="text-sm font-medium text-stone-700" />

                <div class="mt-4 space-y-3">

                    <label class="flex items-center gap-3">

                        <input
                            type="checkbox"
                            name="mode_belajar[]"
                            value="online">

                        <span class="text-stone-700">
                            Online
                        </span>

                    </label>

                    <label class="flex items-center gap-3">

                        <input
                            type="checkbox"
                            name="mode_belajar[]"
                            value="offline">

                        <span class="text-stone-700">
                            Offline
                        </span>

                    </label>

                </div>

            </div>

            <!-- Pengalaman -->
            <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                <x-label
                    for="pengalaman"
                    value="Pengalaman Mengajar"
                    class="text-sm font-medium text-stone-700" />

                <textarea
                    id="pengalaman"
                    name="pengalaman"
                    rows="5"
                    class="mt-3 block w-full rounded-2xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                    placeholder="Contoh: Mengajar Matematika SMP dan SMA selama 5 tahun...">{{ old('pengalaman') }}</textarea>

            </div>

            <!-- Sertifikat -->
            <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                <x-label
                    for="sertifikat"
                    value="Upload Sertifikat"
                    class="text-sm font-medium text-stone-700" />

                <input
                    type="file"
                    name="sertifikat[]"
                    id="sertifikat"
                    multiple
                    class="mt-3 block w-full">

                <p class="mt-2 text-xs text-stone-500">
                    Bisa upload lebih dari satu sertifikat.
                </p>

            </div>

            <!-- Status -->
            <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                <x-label
                    value="Status Posting"
                    class="text-sm font-medium text-stone-700" />

                <div class="mt-4 flex gap-8">

                    <label class="flex items-center gap-2">

                        <input
                            type="radio"
                            name="status_publish"
                            value="published">

                        <span class="text-stone-700">
                            Terposting
                        </span>

                    </label>

                    <label class="flex items-center gap-2">

                        <input
                            type="radio"
                            name="status_publish"
                            value="unpublished"
                            checked>

                        <span class="text-stone-700">
                            Tidak Terposting
                        </span>

                    </label>

                </div>

            </div>

            <!-- Submit -->
            <div class="flex justify-end">

                <button
                    type="submit"
                    class="rounded-2xl bg-stone-800 px-8 py-4 text-sm font-medium text-white transition hover:bg-stone-700">

                    Simpan Postingan

                </button>

            </div>

        </form>

    </div>

</x-app-layout>