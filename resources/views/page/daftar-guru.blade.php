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
   

       <livewire:daftar-guru-home/>

    </div>

</section>

@endsection