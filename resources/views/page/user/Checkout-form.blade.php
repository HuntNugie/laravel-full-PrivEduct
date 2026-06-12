@extends('layouts.main')

@section('content')
    <div class="max-w-5xl mx-auto px-6 lg:px-8 py-10 mt-20">
        <div class="mb-5">
            <a href="{{ route("guru.user.index") }}" class="text-orange-500 hover:text-orange-600 ">
            &larr; Kembali
        </a>
        </div>
        <!-- Header -->
        <div>

            <p class="text-sm font-medium text-orange-500">
                Booking Guru
            </p>

            <h1 class="mt-2 text-4xl font-semibold text-stone-800">
                Ajukan Booking
            </h1>

            <p class="mt-3 text-stone-600">
                Tentukan jadwal belajar dan tuliskan tujuan pembelajaran Anda kepada guru.
            </p>

        </div>

      <livewire:form-checkout :guru="$guru"/>

    </div>
@endsection
