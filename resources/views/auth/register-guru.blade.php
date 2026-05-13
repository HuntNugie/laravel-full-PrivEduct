<x-guest-layout>
    <x-authentication-card>

        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-8 text-center">

            <h1 class="text-3xl font-bold text-stone-800">
                Register Guru
            </h1>

            <p class="mt-3 text-sm leading-relaxed text-stone-500">
                Lengkapi data diri anda untuk mendaftar sebagai guru private di platform kami.
            </p>

        </div>

        <x-validation-errors class="mb-5" />

        <form method="POST" action="{{ route("guru.store") }}" class="space-y-6" enctype="multipart/form-data">
            @csrf

            {{-- NAME --}}
            <div>
                <x-label for="name" value="Full Name" class="text-sm font-medium text-stone-700" />

                <x-input id="name"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            {{-- EMAIL --}}
            <div>
                <x-label for="email" value="Email Address" class="text-sm font-medium text-stone-700" />

                <x-input id="email"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                    type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            {{-- PHONE --}}
            <div>
                <x-label for="no_hp" value="Phone Number" class="text-sm font-medium text-stone-700" />

                <x-input id="no_hp"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                    type="tel" name="no_hp" :value="old('no_hp')" required autocomplete="tel"
                    placeholder="08123456789" />
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

                <select name="lulusan" id="lulusan" class="mt-2 block w-full border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500" required>
                    <option value="">-- Pilih Lulusan --</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="S4">S4</option>
                </select>
            </div>

            {{-- CV --}}
            <div>
                <x-label for="cv" value="Link CV / Portofolio" class="text-sm font-medium text-stone-700" />

                <x-input id="cv"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                    type="file" accept="application/pdf" name="cv" />
                    <small class="text-red-500 text-sm">*file yang di upload dalam format pdf</small>
            </div>

            {{-- PASSWORD --}}
            <div>
                <x-label for="password" value="Password" class="text-sm font-medium text-stone-700" />

                <x-input id="password"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                    type="password" name="password" required autocomplete="new-password" />
            </div>

            {{-- PASSWORD CONFIRM --}}
            <div>
                <x-label for="password_confirmation" value="Confirm Password"
                    class="text-sm font-medium text-stone-700" />

                <x-input id="password_confirmation"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 text-black focus:border-stone-500 focus:ring-stone-500"
                    type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            {{-- TERMS --}}
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="rounded-2xl border border-stone-200 bg-stone-50 p-4">

                    <label for="terms" class="flex items-start gap-3">

                        <x-checkbox name="terms" id="terms" required class="mt-1" />

                        <span class="text-sm leading-relaxed text-stone-600">

                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' =>
                                    '<a target="_blank" href="' .
                                    route('terms.show') .
                                    '" class="font-medium text-stone-800 hover:text-stone-600 underline">' .
                                    __('Terms of Service') .
                                    '</a>',
                            
                                'privacy_policy' =>
                                    '<a target="_blank" href="' .
                                    route('policy.show') .
                                    '" class="font-medium text-stone-800 hover:text-stone-600 underline">' .
                                    __('Privacy Policy') .
                                    '</a>',
                            ]) !!}

                        </span>

                    </label>

                </div>
            @endif

            {{-- BUTTON --}}
            <button type="submit"
                class="w-full rounded-xl bg-stone-800 px-4 py-3 text-sm font-medium text-white transition hover:bg-stone-700">
                Register As Teacher
            </button>

            {{-- LOGIN --}}
            <div class="text-center">

                <a href="{{ route('login') }}" class="text-sm text-stone-500 transition hover:text-stone-800">
                    Already have an account?
                </a>

            </div>

        </form>

    </x-authentication-card>
</x-guest-layout>
