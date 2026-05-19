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

       <livewire:daftar-guru-home/>

    </div>

</section>

@endsection