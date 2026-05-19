@extends('layouts.main')
<!-- ========================= -->
<!-- HERO -->
<!-- ========================= -->
@section('content')
    <section id="beranda" class="relative overflow-hidden pt-40 pb-32">

        <!-- BG -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] rounded-full bg-sky-100 blur-3xl opacity-60"></div>
        <div class="absolute bottom-0 left-0 w-[450px] h-[450px] rounded-full bg-orange-100 blur-3xl opacity-60"></div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-20 items-center">

                <!-- LEFT -->
                <div>

                    <div
                        class="inline-flex items-center gap-3 px-5 py-3 rounded-full bg-orange-50 border border-orange-100 text-orange-600 text-sm font-bold">

                        <div class="w-2 h-2 rounded-full bg-orange-500"></div>

                        Platform Pendidikan Private Profesional

                    </div>

                    <h1 class="mt-8 text-5xl lg:text-7xl font-black leading-tight tracking-tight text-slate-900">

                        Layanan
                        <span class="text-orange-500">
                            Guru Private
                        </span>
                        Profesional Untuk Belajar Di Rumah Maupun Online

                    </h1>

                    <p class="mt-8 text-lg leading-9 text-slate-600 max-w-2xl">

                        PrivEduct merupakan platform layanan pendidikan private yang membantu siswa maupun pembelajar umum
                        menemukan guru profesional untuk belajar langsung di rumah ataupun secara online dengan sistem
                        pembelajaran yang lebih fokus, nyaman, dan personal.

                    </p>

                    <div class="mt-10 flex flex-wrap gap-5">

                        <button
                            class="px-8 py-5 rounded-2xl bg-orange-500 hover:bg-orange-600 text-white font-bold shadow-2xl shadow-orange-200 transition">
                            Cari Guru Sekarang
                        </button>

                        <button
                            class="px-8 py-5 rounded-2xl border border-slate-200 hover:bg-slate-50 text-slate-700 font-bold transition">
                            Konsultasi Gratis
                        </button>

                    </div>

                    <!-- STATS -->
                    <div class="mt-16 grid grid-cols-3 gap-8">

                        <div>

                            <h3 class="text-4xl font-black text-slate-900">
                                500+
                            </h3>

                            <p class="mt-2 text-slate-500">
                                Guru Profesional
                            </p>

                        </div>

                        <div>

                            <h3 class="text-4xl font-black text-slate-900">
                                2.000+
                            </h3>

                            <p class="mt-2 text-slate-500">
                                Siswa Aktif
                            </p>

                        </div>

                        <div>

                            <h3 class="text-4xl font-black text-slate-900">
                                4.9
                            </h3>

                            <p class="mt-2 text-slate-500">
                                Rating Platform
                            </p>

                        </div>

                    </div>

                </div>

                <!-- RIGHT -->
                <div class="relative">

                    <div
                        class="rounded-[40px] bg-gradient-to-br from-sky-100 via-white to-orange-100 p-7 shadow-[0_20px_80px_rgba(0,0,0,0.08)]">

                        <div class="bg-white rounded-[32px] p-6 shadow-lg">

                            <div class="flex items-center justify-between">

                                <div class="flex items-center gap-5">

                                    <div class="w-16 h-16 rounded-3xl overflow-hidden">
                                        <img src="{{ asset('logo.jpeg') }}" alt="PrivEduct" class="w-full h-full object-cover">
                                    </div>

                                    <div>

                                        <h3 class="text-lg font-black text-slate-900">
                                            Kelas Private 
                                        </h3>

                                        <p class="mt-1 text-sm text-slate-500">
                                            Guru datang langsung ke rumah
                                        </p>

                                    </div>

                                </div>

                                <div class="px-4 py-2 rounded-2xl bg-orange-50 text-orange-600 text-sm font-bold">
                                    Terpercaya
                                </div>

                            </div>

                        </div>

                        <div class="mt-6 grid grid-cols-2 gap-6">

                            <div class="bg-white rounded-[32px] p-7 shadow-lg">

                                <div
                                    class="w-14 h-14 rounded-3xl bg-orange-100 flex items-center justify-center text-orange-500 text-xl font-black">
                                    ✓
                                </div>

                                <h3 class="mt-6 text-xl font-black text-slate-900">
                                    Guru Profesional
                                </h3>

                                <p class="mt-3 text-sm leading-7 text-slate-500">
                                    Guru telah melalui proses seleksi kualitas.
                                </p>

                            </div>

                            <div class="bg-white rounded-[32px] p-7 shadow-lg">

                                <div
                                    class="w-14 h-14 rounded-3xl bg-sky-100 flex items-center justify-center text-sky-500 text-xl font-black">
                                    ★
                                </div>

                                <h3 class="mt-6 text-xl font-black text-slate-900">
                                    Jadwal Fleksibel
                                </h3>

                                <p class="mt-3 text-sm leading-7 text-slate-500">
                                    Belajar sesuai kebutuhan dan waktu siswa.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================= -->
    <!-- LAYANAN -->
    <!-- ========================= -->
    <section id="layanan" class="py-28 bg-slate-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-3xl">

                <p class="text-sm font-bold tracking-[0.3em] uppercase text-orange-500">
                    Layanan Pendidikan
                </p>

                <h2 class="mt-5 text-5xl font-black leading-tight tracking-tight text-slate-900">
                    Sistem Belajar Yang Lebih Personal Dan Modern
                </h2>

            </div>

            <div class="mt-20 grid lg:grid-cols-3 gap-8">

                <div class="bg-white rounded-[36px] p-8 shadow-sm">

                    <div
                        class="w-16 h-16 rounded-3xl bg-orange-100 flex items-center justify-center text-orange-500 text-2xl font-black">
                        01
                    </div>

                    <h3 class="mt-8 text-2xl font-black text-slate-900">
                        Guru Datang Ke Rumah
                    </h3>

                    <p class="mt-5 text-slate-600 leading-8">
                        Siswa dapat belajar lebih fokus dan nyaman langsung dari rumah.
                    </p>

                </div>

                <div class="bg-white rounded-[36px] p-8 shadow-sm">

                    <div
                        class="w-16 h-16 rounded-3xl bg-sky-100 flex items-center justify-center text-sky-500 text-2xl font-black">
                        02
                    </div>

                    <h3 class="mt-8 text-2xl font-black text-slate-900">
                        Kelas Online
                    </h3>

                    <p class="mt-5 text-slate-600 leading-8">
                        Pembelajaran online fleksibel dengan sistem modern dan interaktif.
                    </p>

                </div>

                <div class="bg-white rounded-[36px] p-8 shadow-sm">

                    <div
                        class="w-16 h-16 rounded-3xl bg-orange-100 flex items-center justify-center text-orange-500 text-2xl font-black">
                        03
                    </div>

                    <h3 class="mt-8 text-2xl font-black text-slate-900">
                        Guru Terseleksi
                    </h3>

                    <p class="mt-5 text-slate-600 leading-8">
                        Semua pengajar telah melalui proses verifikasi kualitas dan kemampuan.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================= -->
    <!-- GURU -->
    <!-- ========================= -->
    <section id="guru" class="py-28">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8">

                <div class="max-w-3xl">

                    <p class="text-sm font-bold tracking-[0.3em] uppercase text-orange-500">
                        Guru Private Profesional
                    </p>

                    <h2 class="mt-5 text-5xl font-black leading-tight tracking-tight text-slate-900">
                        Temukan Guru Yang Tepat Untuk Belajar Lebih Fokus
                    </h2>

                </div>

                <button
                    class="w-fit px-7 py-4 rounded-2xl bg-orange-500 hover:bg-orange-600 text-white font-bold shadow-xl shadow-orange-200 transition">
                    <a href="{{ route('daftar-guru') }}">
                        Lihat Semua Guru
                    </a>
                </button>

            </div>

            <!-- GRID -->
            <div class="mt-20 grid md:grid-cols-2 xl:grid-cols-3 gap-8">

                <!-- CARD -->
                <div
                    class="bg-white rounded-[36px] border border-slate-100 overflow-hidden shadow-sm hover:shadow-2xl transition">

                    <div class="h-72 bg-gradient-to-br from-sky-100 to-orange-100 relative">

                        <div
                            class="absolute top-6 right-6 px-4 py-2 rounded-2xl bg-white text-orange-500 text-sm font-bold shadow-lg">
                            4.9 Rating
                        </div>

                    </div>

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
                            Berpengalaman mengajar private siswa SMP dan SMA dengan metode pembelajaran personal.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-3">

                            <span class="px-4 py-2 rounded-xl bg-orange-50 text-orange-600 text-sm font-semibold">
                                Offline
                            </span>

                            <span class="px-4 py-2 rounded-xl bg-sky-50 text-sky-600 text-sm font-semibold">
                                Online
                            </span>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div
                    class="bg-white rounded-[36px] border border-slate-100 overflow-hidden shadow-sm hover:shadow-2xl transition">

                    <div class="h-72 bg-gradient-to-br from-orange-100 to-sky-100 relative">

                        <div
                            class="absolute top-6 right-6 px-4 py-2 rounded-2xl bg-white text-orange-500 text-sm font-bold shadow-lg">
                            4.8 Rating
                        </div>

                    </div>

                    <div class="p-8">

                        <div class="flex items-start justify-between gap-4">

                            <div>

                                <h3 class="text-2xl font-black text-slate-900">
                                    Adrian Putra
                                </h3>

                                <p class="mt-2 text-orange-500 font-semibold">
                                    Guru Bahasa Inggris
                                </p>

                            </div>

                            <div class="text-right">

                                <p class="text-sm text-slate-500">
                                    Mulai Dari
                                </p>

                                <h4 class="text-xl font-black text-slate-900">
                                    Rp100K
                                </h4>

                            </div>

                        </div>

                        <p class="mt-6 text-slate-600 leading-8">
                            Fokus pembelajaran speaking, grammar, dan komunikasi profesional.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-3">

                            <span class="px-4 py-2 rounded-xl bg-orange-50 text-orange-600 text-sm font-semibold">
                                Offline
                            </span>

                            <span class="px-4 py-2 rounded-xl bg-sky-50 text-sky-600 text-sm font-semibold">
                                Online
                            </span>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div
                    class="bg-white rounded-[36px] border border-slate-100 overflow-hidden shadow-sm hover:shadow-2xl transition">

                    <div class="h-72 bg-gradient-to-br from-sky-100 to-orange-100 relative">

                        <div
                            class="absolute top-6 right-6 px-4 py-2 rounded-2xl bg-white text-orange-500 text-sm font-bold shadow-lg">
                            4.9 Rating
                        </div>

                    </div>

                    <div class="p-8">

                        <div class="flex items-start justify-between gap-4">

                            <div>

                                <h3 class="text-2xl font-black text-slate-900">
                                    Kevin Hartono
                                </h3>

                                <p class="mt-2 text-orange-500 font-semibold">
                                    Guru Programming
                                </p>

                            </div>

                            <div class="text-right">

                                <p class="text-sm text-slate-500">
                                    Mulai Dari
                                </p>

                                <h4 class="text-xl font-black text-slate-900">
                                    Rp150K
                                </h4>

                            </div>

                        </div>

                        <p class="mt-6 text-slate-600 leading-8">
                            Mengajar web development dan dasar programming modern.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-3">

                            <span class="px-4 py-2 rounded-xl bg-orange-50 text-orange-600 text-sm font-semibold">
                                Online
                            </span>

                            <span class="px-4 py-2 rounded-xl bg-sky-50 text-sky-600 text-sm font-semibold">
                                Fullstack
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================= -->
    <!-- TENTANG -->
    <!-- ========================= -->
    <section id="tentang" class="py-28 bg-slate-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-20 items-center">

                <div class="h-[500px] rounded-[40px] bg-gradient-to-br from-sky-100 to-orange-100">
                    <img src="logo.jpeg" alt="">
                </div>

                <div>

                    <p class="text-sm font-bold tracking-[0.3em] uppercase text-orange-500">
                        Tentang Kami
                    </p>

                    <h2 class="mt-5 text-5xl font-black leading-tight tracking-tight text-slate-900">
                        Pendidikan Private Yang Lebih Modern Dan Personal
                    </h2>

                    <p class="mt-8 text-lg leading-9 text-slate-600">
                        PrivEduct hadir untuk membantu siswa mendapatkan pengalaman belajar private yang lebih fokus dan
                        berkualitas bersama guru profesional.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- ========================= -->
    <!-- KONTAK -->
    <!-- ========================= -->
    <section id="kontak" class="py-28">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-3xl">

                <p class="text-sm font-bold tracking-[0.3em] uppercase text-orange-500">
                    Kontak
                </p>

                <h2 class="mt-5 text-5xl font-black leading-tight tracking-tight text-slate-900">
                    Hubungi Kami
                </h2>

            </div>

            <div class="mt-20 grid lg:grid-cols-2 gap-10">

                <!-- INFO -->
                <div class="bg-slate-900 rounded-[40px] p-10 text-white">

                    <h3 class="text-3xl font-black">
                        Informasi Kontak
                    </h3>

                    <div class="mt-10 space-y-8">

                        <div>

                            <p class="text-slate-400 text-sm">
                                Email
                            </p>

                            <h4 class="mt-2 text-xl font-bold">
                                info@priveduct.com
                            </h4>

                        </div>

                        <div>

                            <p class="text-slate-400 text-sm">
                                WhatsApp
                            </p>

                            <h4 class="mt-2 text-xl font-bold">
                                +62 812 3456 7890
                            </h4>

                        </div>

                    </div>

                </div>

                <!-- FORM -->
                <div class="bg-white rounded-[40px] p-10 border border-slate-100 shadow-sm">

                    <div class="space-y-6">

                        <input type="text" placeholder="Nama Lengkap"
                            class="w-full h-14 px-5 rounded-2xl border border-slate-200 outline-none focus:border-orange-500">

                        <input type="email" placeholder="Email"
                            class="w-full h-14 px-5 rounded-2xl border border-slate-200 outline-none focus:border-orange-500">

                        <textarea rows="6" placeholder="Pesan"
                            class="w-full px-5 py-4 rounded-2xl border border-slate-200 outline-none focus:border-orange-500"></textarea>
                        <button
                            class="w-full h-14 rounded-2xl bg-orange-500 hover:bg-orange-600 text-white font-bold transition">
                            Kirim Pesan
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
