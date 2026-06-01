<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">

        <!-- Header -->
        <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">

            <div>

                <p class="text-sm text-stone-500">
                    Dashboard Admin
                </p>

                <h1 class="mt-1 text-4xl font-semibold text-stone-800">
                    Daftar Guru
                </h1>

                <p class="mt-3 max-w-2xl leading-relaxed text-stone-600">
                    Kelola seluruh data guru yang terdaftar pada platform private learning anda.
                </p>

            </div>

            <div class="flex gap-3">
                <a href="{{ route("guru.create") }}"
                    class="inline-flex items-center justify-center rounded-2xl bg-stone-800 px-6 py-3 text-sm font-medium text-white transition hover:bg-stone-700">

                    Tambah Guru

                </a>

               
            </div>

        </div>

        <livewire:admin.guru-table/>

    </div>
</x-app-layout>
