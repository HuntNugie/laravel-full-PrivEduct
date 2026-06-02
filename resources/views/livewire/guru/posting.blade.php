
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">

        <!-- Header -->
        <div class="flex items-center justify-between">

            <div>

                <p class="text-sm font-medium text-orange-500">
                    Teacher Posting
                </p>

                <h1 class="mt-1 text-4xl font-semibold text-stone-800">
                    Kelola Postingan
                </h1>

                <p class="mt-3 text-stone-600">
                    Informasi pada postingan ini akan ditampilkan kepada calon siswa.
                </p>

            </div>

        </div>

        <livewire:guru.posting-status />

        <!-- Form -->
        <div class="mt-8 rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

            <div class="mb-8">

                <h2 class="text-xl font-semibold text-stone-800">
                    Informasi Postingan
                </h2>

                <p class="mt-2 text-sm text-stone-500">
                    Lengkapi informasi berikut agar siswa dapat mengenal Anda dengan lebih baik.
                </p>

            </div>

            <livewire:guru.posting-preview />
            {{-- nanti diganti livewire --}}
            <livewire:guru.posting-form />
        </div>

    </div>

