<x-app-layout>
    <div class="max-w-5xl mx-auto px-6 lg:px-8 py-10">

        {{-- HEADER --}}
        <div class="mb-10">

            <h1 class="mt-2 text-4xl font-semibold text-stone-800">
                Tambah Data Guru
            </h1>

            <p class="mt-3 max-w-2xl text-stone-600 leading-relaxed">
                Tambahkan data guru baru ke dalam platform pembelajaran private.
                Lengkapi seluruh informasi guru dengan benar.
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

            <form method="POST" action="{{ route('guru.store') }}" class="space-y-6">

                @csrf

                {{-- NAME --}}
                <div>

                    <x-label for="name" value="Full Name" class="text-sm font-medium text-stone-700" />

                    <x-input id="name"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        type="text" name="name" :value="old('name')" required autofocus />

                </div>

                {{-- EMAIL --}}
                <div>

                    <x-label for="email" value="Email Address" class="text-sm font-medium text-stone-700" />

                    <x-input id="email"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        type="email" name="email" :value="old('email')" required />

                </div>

                {{-- PHONE --}}
                <div>

                    <x-label for="no_hp" value="Phone Number" class="text-sm font-medium text-stone-700" />

                    <x-input id="no_hp"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        type="tel" name="no_hp" :value="old('no_hp')" required placeholder="08123456789" />

                </div>
                <div>

                    <x-label for="tgl_lahir" value="Tanggal Lahir" class="text-sm font-medium text-stone-700" />

                    <x-input id="tgl_lahir"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        type="date" name="tgl_lahir" :value="old('tgl_lahir')" required />

                </div>

                {{-- GENDER --}}
                <div>

                    <x-label value="Jenis Kelamin" class="text-sm font-medium text-stone-700" />

                    <div class="mt-3 flex gap-6">

                        <label class="flex items-center gap-2">

                            <input type="radio" name="jk" value="Laki-laki"
                                class="border-stone-300 text-stone-800 focus:ring-stone-500"
                                {{ old('jk') == 'Laki-laki' ? 'checked' : '' }}>

                            <span class="text-sm text-stone-700">
                                Laki-laki
                            </span>

                        </label>

                        <label class="flex items-center gap-2">

                            <input type="radio" name="jk" value="Perempuan"
                                class="border-stone-300 text-stone-800 focus:ring-stone-500"
                                {{ old('jk') == 'Perempuan' ? 'checked' : '' }}>

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
                        placeholder="Masukkan alamat lengkap...">{{ old('alamat') }}</textarea>

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

                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>

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
                                    {{ is_array(old('mata_pelajarans')) && in_array($ma->id, old('mata_pelajarans')) ? 'checked' : '' }}>

                                {{ $ma->nama_mapel }}

                            </label>
                        @endforeach

                    </div>

                </div>


                {{-- PASSWORD --}}
                <div>

                    <x-label for="password" value="Password" class="text-sm font-medium text-stone-700" />

                    <x-input id="password"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        type="password" name="password" required />

                </div>

                {{-- PASSWORD CONFIRM --}}
                <div>

                    <x-label for="password_confirmation" value="Confirm Password"
                        class="text-sm font-medium text-stone-700" />

                    <x-input id="password_confirmation"
                        class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                        type="password" name="password_confirmation" required />

                </div>

                {{-- BUTTON --}}
                <div class="pt-4">

                    <button type="submit"
                        class="w-full rounded-2xl bg-stone-800 px-4 py-3 text-sm font-medium text-white transition hover:bg-stone-700">

                        Tambah Guru

                    </button>

                </div>

            </form>

        </div>

    </div>
</x-app-layout>
