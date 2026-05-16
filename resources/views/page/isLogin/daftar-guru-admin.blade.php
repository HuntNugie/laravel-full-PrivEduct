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

            <button
                class="inline-flex items-center justify-center rounded-2xl bg-stone-800 px-6 py-3 text-sm font-medium text-white transition hover:bg-stone-700">

                Tambah Guru

            </button>

        </div>

        <!-- Table Card -->
        <div class="mt-10 overflow-hidden rounded-3xl border border-stone-200 bg-white shadow-sm">

            <!-- Top -->
            <div
                class="flex flex-col gap-4 border-b border-stone-200 p-6 lg:flex-row lg:items-center lg:justify-between">

                <div>

                    <h2 class="text-lg font-semibold text-stone-800">
                        Data Guru
                    </h2>

                    <p class="mt-1 text-sm text-stone-500">
                        List seluruh data guru private yang tersedia.
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

                            <th
                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-stone-500">
                                Nama
                            </th>

                            <th
                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-stone-500">
                                Lulusan
                            </th>

                            <th
                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-stone-500">
                                Status
                            </th>

                            <th
                                class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-stone-500">
                                Tanggal
                            </th>

                            <th
                                class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-stone-500">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <!-- Body -->
                    <tbody class="divide-y divide-stone-100 bg-white">

                        <!-- Item -->
                        <tr class="transition hover:bg-stone-50">

                            <td class="px-6 py-5">

                                <div class="flex items-center gap-4">

                                    <div
                                        class="flex size-12 items-center justify-center rounded-2xl bg-stone-200 text-sm font-semibold text-stone-700">
                                        S
                                    </div>

                                    <div>

                                        <h3 class="font-medium text-stone-800">
                                            Sarah Wijaya
                                        </h3>

                                        <p class="text-sm text-stone-500">
                                            sarah@gmail.com
                                        </p>

                                    </div>

                                </div>

                            </td>

                            <td class="px-6 py-5 text-sm text-stone-600">
                                S1 Pendidikan Matematika
                            </td>

                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">

                                    Active

                                </span>

                            </td>

                            <td class="px-6 py-5 text-sm text-stone-500">
                                12 Mei 2026
                            </td>

                            <td class="px-6 py-5">

                                <div class="flex flex-wrap items-center justify-center gap-2">

                                    <button
                                        class="rounded-xl border border-stone-300 px-4 py-2 text-xs font-medium text-stone-700 transition hover:bg-stone-100">

                                        Detail

                                    </button>

                                    <button
                                        class="rounded-xl border border-blue-200 bg-blue-50 px-4 py-2 text-xs font-medium text-blue-700 transition hover:bg-blue-100">

                                        Edit

                                    </button>

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

                        <!-- Item -->
                        <tr class="transition hover:bg-stone-50">

                            <td class="px-6 py-5">

                                <div class="flex items-center gap-4">

                                    <div
                                        class="flex size-12 items-center justify-center rounded-2xl bg-stone-200 text-sm font-semibold text-stone-700">
                                        A
                                    </div>

                                    <div>

                                        <h3 class="font-medium text-stone-800">
                                            Adrian Putra
                                        </h3>

                                        <p class="text-sm text-stone-500">
                                            adrian@gmail.com
                                        </p>

                                    </div>

                                </div>

                            </td>

                            <td class="px-6 py-5 text-sm text-stone-600">
                                S1 Sastra Inggris
                            </td>

                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">

                                    Pending

                                </span>

                            </td>

                            <td class="px-6 py-5 text-sm text-stone-500">
                                10 Mei 2026
                            </td>

                            <td class="px-6 py-5">

                                <div class="flex flex-wrap items-center justify-center gap-2">

                                    <button
                                        class="rounded-xl border border-stone-300 px-4 py-2 text-xs font-medium text-stone-700 transition hover:bg-stone-100">

                                        Detail

                                    </button>

                                    <button
                                        class="rounded-xl border border-blue-200 bg-blue-50 px-4 py-2 text-xs font-medium text-blue-700 transition hover:bg-blue-100">

                                        Edit

                                    </button>

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

                        <!-- Item -->
                        <tr class="transition hover:bg-stone-50">

                            <td class="px-6 py-5">

                                <div class="flex items-center gap-4">

                                    <div
                                        class="flex size-12 items-center justify-center rounded-2xl bg-stone-200 text-sm font-semibold text-stone-700">
                                        K
                                    </div>

                                    <div>

                                        <h3 class="font-medium text-stone-800">
                                            Kevin Hartono
                                        </h3>

                                        <p class="text-sm text-stone-500">
                                            kevin@gmail.com
                                        </p>

                                    </div>

                                </div>

                            </td>

                            <td class="px-6 py-5 text-sm text-stone-600">
                                S1 Teknik Informatika
                            </td>

                            <td class="px-6 py-5">

                                <span
                                    class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700">

                                    Non Active

                                </span>

                            </td>

                            <td class="px-6 py-5 text-sm text-stone-500">
                                08 Mei 2026
                            </td>

                            <td class="px-6 py-5">

                                <div class="flex flex-wrap items-center justify-center gap-2">

                                    <button
                                        class="rounded-xl border border-stone-300 px-4 py-2 text-xs font-medium text-stone-700 transition hover:bg-stone-100">

                                        Detail

                                    </button>

                                    <button
                                        class="rounded-xl border border-blue-200 bg-blue-50 px-4 py-2 text-xs font-medium text-blue-700 transition hover:bg-blue-100">

                                        Edit

                                    </button>

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

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</x-app-layout>
