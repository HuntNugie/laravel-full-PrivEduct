<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-5" />

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <div>
                <x-label for="name" value="Full Name" class="text-sm font-medium text-stone-700" />

                <x-input id="name"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 focus:border-stone-500 focus:ring-stone-500 text-black"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="email" value="Email Address" class="text-sm font-medium text-black" />

                <x-input id="email"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 focus:border-stone-500 focus:ring-stone-500 text-black"
                    type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <div>
                <x-label for="no_hp" value="Phone number" class="text-sm font-medium text-stone-700" />

                <x-input id="no_hp"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 focus:border-stone-500 focus:ring-stone-500 text-black"
                    type="tel" name="no_hp" required autocomplete="new-password" />
            </div>
            <div>
                <x-label for="jk" value="Jenis kelamin" class="text-sm font-medium text-stone-700 " />


                <div>
                    <input type="radio" name="jk" value="Laki-laki">
                    <span class="text-black">Laki - laki</span>
                </div>

                <div>
                    <input type="radio" name="jk" value="Perempuan">
                    <span class="text-black">Perempuan</span>
                </div>

            </div>

            <div>
                <x-label for="password" value="Password" class="text-sm font-medium text-stone-700" />

                <x-input id="password"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 focus:border-stone-500 focus:ring-stone-500 text-black"
                    type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-label for="password_confirmation" value="Confirm Password"
                    class="text-sm font-medium text-stone-700" />

                <x-input id="password_confirmation"
                    class="mt-2 block w-full rounded-xl border-stone-300 bg-stone-50 focus:border-stone-500 focus:ring-stone-500 text-black"
                    type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>


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

            <button type="submit"
                class="w-full rounded-xl bg-stone-800 px-4 py-3 text-sm font-medium text-white transition hover:bg-stone-700">
                Create Account
            </button>

            <div class="text-center">
                <a href="{{ route('login') }}" class="text-sm text-stone-500 transition hover:text-stone-800">
                    Already have an account?
                </a>
            </div>
            <div class="text-center">
                <a href="{{ route('guru.register') }}" class="text-sm text-stone-500 transition hover:text-stone-800">
                    Mau mendaftar sebagai guru ?
                </a>
            </div>

        </form>
    </x-authentication-card>
</x-guest-layout>
