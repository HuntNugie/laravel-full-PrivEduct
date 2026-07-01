<x-app-layout>

    <div class="m-5">
        <a href="{{ route('order.index') }}"
            class="rounded-2xl bg-stone-200 px-6 py-3 text-sm font-medium text-stone-700 transition hover:bg-stone-300">
            Kembali
        </a>
    </div>

    <div class="max-w-6xl mx-auto px-6 lg:px-8 py-10">

        <!-- Header -->
        <div>

            <p class="text-sm font-medium text-orange-500">
                Detail Siswa
            </p>

            <h1 class="mt-2 text-4xl font-semibold text-stone-800">
                Informasi Siswa
            </h1>

            <p class="mt-3 text-stone-600">
                Informasi siswa yang mengajukan booking kepada Anda.
            </p>

        </div>

        <div class="mt-10 grid gap-8 lg:grid-cols-3">

            <!-- Profil -->
            <div>

                <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

                    <img src="{{ asset($order->user->profile_photo_url) }}" class="h-80 w-full rounded-3xl object-cover">

                    <div class="mt-6 text-center">

                        <h2 class="text-2xl font-semibold text-stone-800">
                            {{ $order->user->name }}
                        </h2>

                        <p class="mt-2 text-stone-500">
                            Siswa
                        </p>

                    </div>

                </div>

            </div>

            <!-- Detail -->
            <div class="lg:col-span-2 space-y-8">

                <!-- Data Diri -->
                <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                    <h2 class="text-xl font-semibold text-stone-800">
                        Data Pribadi
                    </h2>

                    <div class="mt-8 grid gap-6 md:grid-cols-2">

                        <div>

                            <p class="text-sm text-stone-500">
                                Nama Lengkap
                            </p>

                            <p class="mt-2 font-medium text-stone-800">
                                {{ $order->user->name }}
                            </p>

                        </div>

                        <div>

                            <p class="text-sm text-stone-500">
                                Email
                            </p>

                            <p class="mt-2 font-medium text-stone-800">
                                {{ $order->user->email }}
                            </p>

                        </div>

                        <div>

                            <p class="text-sm text-stone-500">
                                Nomor Handphone
                            </p>

                            <p class="mt-2 font-medium text-stone-800">
                                {{ $order->user->user_profile->no_hp }}
                            </p>

                        </div>

                        <div>

                            <p class="text-sm text-stone-500">
                                Jenis Kelamin
                            </p>

                            <p class="mt-2 font-medium text-stone-800">
                                {{ $order->user->user_profile->jenis_kelamin }}
                            </p>

                        </div>
                        <div>

                            <p class="text-sm text-stone-500">
                                Alamat
                            </p>

                            <p class="mt-2 leading-7 text-stone-700">
                                {{ $order->user->user_profile->alamat }}
                            </p>

                        </div>
                        <div>

                            <p class="text-sm text-stone-500">
                                Pendidikan
                            </p>

                            <p class="mt-2 leading-7 text-stone-700">
                                {{ $order->user->user_profile->pendidikan }}
                            </p>

                        </div>

                    </div>



                </div>

                <!-- Informasi Booking -->
                <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                    <h2 class="text-xl font-semibold text-stone-800">
                        Informasi Booking
                    </h2>

                    <div class="mt-8 grid gap-6 md:grid-cols-2">

                        <div>

                            <p class="text-sm text-stone-500">
                                Jadwal Belajar
                            </p>

                            <p class="mt-2 font-medium text-stone-800">
                                {{ $order->jadwal_belajar }}
                            </p>

                        </div>

                        <div>

                            <p class="text-sm text-stone-500">
                                Status Konfirmasi
                            </p>

                            @if ($order->status === 'pending')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-yellow-100 px-4 py-2 text-sm font-medium text-yellow-700">

                                    Menunggu Konfirmasi

                                </span>
                            @elseif ($order->status === 'accepted')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-green-100 px-4 py-2 text-sm font-medium text-green-700">

                                    Diterima

                                </span>
                            @elseif ($order->status === 'rejected')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-red-100 px-4 py-2 text-sm font-medium text-red-700">

                                    Ditolak

                                </span>
                            @endif

                        </div>
                        <div>

                            <p class="text-sm text-stone-500">
                                Status bayar
                            </p>

                            @if ($order->status_bayar === 'pending')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-yellow-100 px-4 py-2 text-sm font-medium text-yellow-700">

                                    Belum Dibayar

                                </span>
                            @elseif ($order->status_bayar === 'paid')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-green-100 px-4 py-2 text-sm font-medium text-green-700">

                                    Dibayar

                                </span>
                            @endif

                        </div>
                        <div>

                            <p class="text-sm text-stone-500">
                                Status belajar
                            </p>

                            @if ($order->status_belajar === 'pending')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-yellow-100 px-4 py-2 text-sm font-medium text-yellow-700">

                                    Pembelajaran belum di mulai

                                </span>
                            @elseif ($order->status_belajar === 'booking')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-blue-100 px-4 py-2 text-sm font-medium text-blue-700">

                                    Pembelajaran sedang berjalan

                                </span>
                            @elseif ($order->status_belajar === 'completed')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-green-100 px-4 py-2 text-sm font-medium text-green-700">

                                    Pembelajaran selesai

                                </span>
                            @endif

                        </div>

                    </div>

                    <div class="mt-8">

                        <p class="text-sm text-stone-500">
                            Pesan dari Siswa
                        </p>

                        <div class="mt-3 rounded-2xl bg-stone-50 p-5">

                            <p class="leading-7 text-stone-700">
                                {{ $order->catatan }}
                            </p>

                        </div>

                    </div>

                </div>
                @if ($order->status_belajar == 'booking')
                    <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                        <h2 class="text-xl font-semibold text-stone-800">
                            Informasi belajar
                        </h2>

                        <div class="mt-8 grid gap-6 md:grid-cols-2">

                            <div>
                                <p class="text-sm text-stone-500">Konfirmasi pembelajaran</p>
                                <button
                                    class="mt-2 inline-flex border cursor:pointer bg-yellow-100 px-3 py-1 text-sm font-medium text-yellow-700">Konfirmasi pembelajaran</button>

                            </div>


                        </div>


                    </div>
                @endif

            </div>

        </div>

    </div>

    <x-partials.modal-confirm-belajar/>
</x-app-layout>
