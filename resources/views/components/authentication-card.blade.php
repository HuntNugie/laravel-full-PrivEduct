<div class="min-h-screen grid lg:grid-cols-2 bg-stone-100">

    <!-- Left Content -->
    <div class="hidden lg:flex flex-col justify-between bg-stone-200 p-16">

        <div>
            {{ $logo }}
        </div>

        <div class="max-w-lg">

            <p class="text-sm font-medium tracking-[0.2em] text-stone-500 uppercase">
                Private Learning Platform
            </p>

            <h1 class="mt-6 text-5xl font-semibold leading-tight text-stone-800">
                Belajar lebih fokus bersama mentor private terbaik.
            </h1>

            <p class="mt-6 text-lg leading-relaxed text-stone-600">
                Platform pembelajaran private modern untuk siswa, mahasiswa,
                maupun pembelajaran profesional dengan pengalaman belajar yang lebih personal.
            </p>

        </div>

        <div class="flex items-center gap-10 text-sm text-stone-500">

            <div>
                <p class="text-2xl font-semibold text-stone-800">500+</p>
                <span>Active Students</span>
            </div>

            <div>
                <p class="text-2xl font-semibold text-stone-800">120+</p>
                <span>Professional Tutors</span>
            </div>

            <div>
                <p class="text-2xl font-semibold text-stone-800">98%</p>
                <span>Satisfaction</span>
            </div>

        </div>

    </div>

    <!-- Right Side -->
    <div class="flex items-center justify-center px-6 py-12 bg-white">

        <div class="w-full max-w-md">

            <div class="mb-10">
                <h2 class="text-3xl font-semibold text-stone-800">
                    Welcome Back
                </h2>

                <p class="mt-2 text-sm text-stone-500">
                    Login untuk melanjutkan pembelajaran anda.
                </p>
            </div>

            <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                {{ $slot }}

            </div>

        </div>

    </div>

</div>