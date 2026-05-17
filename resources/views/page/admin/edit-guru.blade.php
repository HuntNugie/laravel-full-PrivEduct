<x-app-layout>
    <div class="max-w-5xl mx-auto px-6 lg:px-8 py-10">

        {{-- HEADER --}}
        <div class="mb-10">

        
            <h1 class="mt-2 text-4xl font-semibold text-stone-800">
                Edit Data Guru
            </h1>

            <p class="mt-3 max-w-2xl text-stone-600 leading-relaxed">
                Edit data guru yang sudah ada di dalam platform pembelajaran private.
                Perbarui seluruh informasi guru dengan benar.
            </p>

        </div>

        <div class="mb-6">
            <a href="{{ route('guru') }}" class="inline-block rounded-md border border-stone-200 px-4 py-2 text-sm font-medium text-stone-700 bg-stone-50 hover:bg-stone-100">
                &larr; Kembali ke Daftar Guru
            </a>
        </div>

        {{-- CARD FORM --}}
        <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

            <x-validation-errors class="mb-6" />

            <form method="POST" action="{{ route('guru.update',$guru->id) }}" class="space-y-6">

                @csrf
                @method('PUT')

                {{-- NAME --}}
                <div>

                    <x-label for="name" value="Full Name" class="text-sm font-medium text-stone-700" />

                    <x-input id="name"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        type="text" name="name" :value="$guru->User->name " required autofocus />

                </div>

                {{-- EMAIL --}}
                <div>

                    <x-label for="email" value="Email Address" class="text-sm font-medium text-stone-700" />

                    <x-input id="email"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-300 text-black focus:border-stone-500 focus:ring-stone-500"
                        type="email" name="email" :value="$guru->User->email" disabled />

                </div>

                {{-- PHONE --}}
                <div>

                    <x-label for="no_hp" value="Phone Number" class="text-sm font-medium text-stone-700" />

                    <x-input id="no_hp"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        type="tel" name="no_hp" :value="$guru->no_hp" required placeholder="08123456789" />

                </div>

                {{-- GENDER --}}
                <div>

                    <x-label value="Jenis Kelamin" class="text-sm font-medium text-stone-700" />

                    <div class="mt-3 flex gap-6">

                        <label class="flex items-center gap-2">

                            <input type="radio" name="jk" value="Laki-laki"
                                class="border-stone-300 text-stone-800 focus:ring-stone-500"
                                {{ $guru->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>

                            <span class="text-sm text-stone-700">
                                Laki-laki
                            </span>

                        </label>

                        <label class="flex items-center gap-2">

                            <input type="radio" name="jk" value="Perempuan"
                                class="border-stone-300 text-stone-800 focus:ring-stone-500"
                                {{ $guru->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>

                            <span class="text-sm text-stone-700">
                                Perempuan
                            </span>

                        </label>

                    </div>

                </div>

                {{-- ADDRESS --}}
                <div>

                    <x-label for="alamat" value="Alamat" class="text-sm font-medium text-stone-700" />

                    <textarea id="alamat" name="alamat" rows="4"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        placeholder="Masukkan alamat lengkap...">{{ $guru->alamat }}</textarea>

                </div>

                {{-- LAST EDUCATION --}}
                <div>

                    <x-label for="lulusan" value="Lulusan" class="text-sm font-medium text-stone-700" />

                    <select name="lulusan" id="lulusan"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        required>

                        <option value="">
                            -- Pilih Lulusan --
                        </option>

                        <option value="SD" {{ $guru->lulusan == 'SD' ? 'selected' : '' }}>SD</option>
                        <option value="SMP" {{ $guru->lulusan == 'SMP' ? 'selected' : '' }}>SMP</option>
                        <option value="SMA" {{ $guru->lulusan == 'SMA' ? 'selected' : '' }}>SMA</option>
                        <option value="D3" {{ $guru->lulusan == 'D3' ? 'selected' : '' }}>D3</option>
                        <option value="S1" {{ $guru->lulusan == 'S1' ? 'selected' : '' }}>S1</option>
                        <option value="S2" {{ $guru->lulusan == 'S2' ? 'selected' : '' }}>S2</option>
                        <option value="S3" {{ $guru->lulusan == 'S3' ? 'selected' : '' }}>S3</option>

                    </select>

                </div>

                {{-- SUBJECTS --}}
                <div>

                    <x-label value="Mata Pelajaran yang Dikuasai" class="text-sm font-medium text-stone-700" />

                    <div class="mt-3 grid gap-3 sm:grid-cols-2">

                        @foreach ($mapel as $ma)
                            <label
                                class="flex items-center gap-3 rounded-xl border border-stone-200 bg-stone-50 px-4 py-3 text-sm text-stone-700 transition hover:border-stone-300">

                                <input type="checkbox" name="mata_pelajarans[]" value="{{ $ma->id }}"
                                    class="h-4 w-4 rounded border-stone-300 text-stone-800 focus:ring-stone-500"
                                  {{ $guru->MataPelajarans->contains($ma->id) ? "checked" : "" }}>

                                {{ $ma->nama_mapel }}

                            </label>
                        @endforeach

                    </div>

                </div>


                {{-- BUTTON --}}
                <div class="pt-4">

                    <button type="submit"
                        class="w-full rounded-2xl bg-stone-800 px-4 py-3 text-sm font-medium text-white transition hover:bg-stone-700">

                        Edit Guru

                    </button>

                </div>

            </form>

        </div>

    </div>
</x-app-layout>
