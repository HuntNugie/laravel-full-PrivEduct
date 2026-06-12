@extends('layouts.main')

@section('content')
    <div class="max-w-7xl mt-20 mx-auto px-6 lg:px-8 py-12">

        <div class="mb-5">
            
        <a href="{{ route('guru.user.index') }}" class="mb-8 rounded-2xl bg-stone-800 px-6 py-3 text-sm font-medium text-white transition hover:bg-stone-700">
            Kembali
         </a>
        </div>
        <div class="grid gap-8 lg:grid-cols-3">

            <!-- SIDEBAR -->
            <div>

                <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

                    <img src="{{ asset('/storage/' . $guru->posting->foto_cover) }}"
                        class="h-80 w-full rounded-3xl object-cover">

                    <div class="mt-6">

                        <h1 class="text-3xl font-semibold text-stone-800">
                            {{ $guru->user->name }}
                        </h1>

                        <p class="mt-2 text-orange-500 font-medium">
                            {{ $guru->mataPelajarans->pluck('nama_mapel')->join(', ') }}
                        </p>

                    </div>

                    <!-- Jenis kelamin -->
                    <div class="mt-6">

                        <p class="text-sm text-stone-500">
                            Jenis kelamin
                        </p>

                        <h3 class="mt-1 text-2xl font-semibold text-stone-800">
                            {{ $guru->jenis_kelamin }}
                        </h3>

                    </div>
                    <!-- Pendidikan terakhir -->
                    <div class="mt-6">

                        <p class="text-sm text-stone-500">
                            Pendidikan terakhir
                        </p>

                        <h3 class="mt-1 text-2xl font-semibold text-stone-800">
                            {{ $guru->lulusan }}
                        </h3>

                    </div>
                    <!-- Alamat -->
                    <div class="mt-6">

                        <p class="text-sm text-stone-500">
                            Alamat
                        </p>

                        <h3 class="mt-1 text-2xl font-semibold text-stone-800">
                            {{ $guru->alamat }}
                        </h3>

                    </div>

                    <!-- Tarif -->
                    <div class="mt-6">

                        <p class="text-sm text-stone-500">
                            Tarif Mengajar
                        </p>

                        <h3 class="mt-1 text-3xl font-semibold text-stone-800">
                            Rp {{ number_format($guru->posting->tarif, 0, ',', '.') }}
                        </h3>

                        <p class="text-sm text-stone-500">
                            per jam
                        </p>

                    </div>

                    <!-- Action -->
                    <div class="mt-8 space-y-3">

                       <form action="{{ route("guru.checkout", $guru->id) }}">
                         <button 
                            class="w-full rounded-2xl bg-orange-500 px-5 py-3 text-white font-medium hover:bg-orange-600">

                            Booking Sekarang

                        </button>
                       </form>


                    </div>

                </div>

            </div>

            <!-- CONTENT -->
            <div class="lg:col-span-2 space-y-8">

                <!-- Tentang Guru -->
                <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                    <h2 class="text-2xl font-semibold text-stone-800">
                        Tentang Guru
                    </h2>

                    <p class="mt-5 leading-8 text-stone-600">
                        {{ $guru->posting->caption }}
                    </p>

                </div>

                <!-- Metode Belajar -->
                <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                    <h2 class="text-2xl font-semibold text-stone-800">
                        Metode Belajar
                    </h2>

                    <div class="mt-6 flex flex-wrap gap-3">

                        @foreach ($guru->posting->metode_belajar as $metode)
                            <span class="rounded-full bg-orange-100 px-4 py-2 text-sm font-medium text-orange-700">

                                {{ ucfirst($metode) }}

                            </span>
                        @endforeach

                    </div>

                </div>

                <!-- Pengalaman -->
                <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                    <h2 class="text-2xl font-semibold text-stone-800">
                        Pengalaman Mengajar
                    </h2>

                    <p class="mt-5 leading-8 text-stone-600">
                        {{ $guru->posting->pengalaman }}
                    </p>

                </div>


                <!-- Informasi -->
                <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                    <h2 class="text-2xl font-semibold text-stone-800">
                        Informasi Postingan
                    </h2>

                    <div class="mt-6 grid gap-6 md:grid-cols-2">

                        <div>

                            <p class="text-sm text-stone-500">
                                Diposting
                            </p>

                            <p class="mt-1 font-medium text-stone-800">
                                {{ $guru->posting->created_at->translatedFormat('d F Y') }}
                            </p>

                        </div>

                        <div>

                            <p class="text-sm text-stone-500">
                                Terakhir Diperbarui
                            </p>

                            <p class="mt-1 font-medium text-stone-800">
                                {{ $guru->posting->updated_at->diffForHumans() }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
