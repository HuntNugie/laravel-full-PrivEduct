@extends('layouts.main')

@section('content')

<section class="relative overflow-hidden pt-40 pb-28 bg-slate-50">

    <!-- BG -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] rounded-full bg-sky-100 blur-3xl opacity-60"></div>
    <div class="absolute bottom-0 left-0 w-[450px] h-[450px] rounded-full bg-orange-100 blur-3xl opacity-60"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <!-- HEADER -->
        <div class="max-w-3xl">

            <p class="text-sm font-bold tracking-[0.3em] uppercase text-orange-500">
                Guru Professional
            </p>

            <h1 class="mt-5 text-5xl lg:text-6xl font-black leading-tight tracking-tight text-slate-900">
                Temukan Guru Private Sesuai Kebutuhan Belajar Anda
            </h1>

            <p class="mt-8 text-lg leading-9 text-slate-600">
                Pilih guru professional dengan sistem pembelajaran personal,
                fleksibel, dan nyaman untuk belajar di rumah maupun online.
            </p>

        </div>

        <!-- FILTER -->
        <div class="mt-16 bg-white rounded-[40px] p-8 shadow-sm border border-slate-100">

            <div class="grid lg:grid-cols-4 gap-5">

                <!-- SEARCH -->
                <div class="lg:col-span-2">

                    <label class="text-sm font-bold text-slate-700">
                        Cari Guru
                    </label>

                    <input
                        type="text"
                        placeholder="Cari nama guru atau mata pelajaran..."
                        class="mt-3 w-full h-16 px-6 rounded-2xl border border-slate-200 outline-none focus:border-orange-500"
                    >

                </div>

                <!-- MAPEL -->
                <div>

                    <label class="text-sm font-bold text-slate-700">
                        Mata Pelajaran
                    </label>

                    <select
                        class="mt-3 w-full h-16 px-6 rounded-2xl border border-slate-200 outline-none focus:border-orange-500 bg-white"
                    >
                        <option>Semua Pelajaran</option>
                        <option>Matematika</option>
                        <option>Bahasa Inggris</option>
                        <option>Programming</option>
                        <option>Fisika</option>
                    </select>

                </div>

                <!-- MODE -->
                <div>

                    <label class="text-sm font-bold text-slate-700">
                        Sistem Belajar
                    </label>

                    <select
                        class="mt-3 w-full h-16 px-6 rounded-2xl border border-slate-200 outline-none focus:border-orange-500 bg-white"
                    >
                        <option>Semua</option>
                        <option>Online</option>
                        <option>Offline</option>
                    </select>

                </div>

            </div>

        </div>

        <!-- GRID -->
        <div class="mt-20 grid md:grid-cols-2 xl:grid-cols-3 gap-8">

            <!-- CARD -->
            <div
                class="bg-white rounded-[36px] border border-slate-100 overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-1 transition duration-300">

                <!-- IMAGE -->
                <div class="h-80 bg-gradient-to-br from-sky-100 to-orange-100 relative">

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
                                Sarah Wijaya
                            </h3>

                            <p class="mt-2 text-orange-500 font-semibold">
                                Guru Matematika
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

                        <span
                            class="px-4 py-2 rounded-xl bg-orange-50 text-orange-600 text-sm font-semibold">
                            Offline
                        </span>

                        <span
                            class="px-4 py-2 rounded-xl bg-sky-50 text-sky-600 text-sm font-semibold">
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

        </div>

    </div>

</section>

@endsection