<div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">

    <!-- Welcome -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

        <div>
            <p class="text-sm text-orange-500 font-medium">
                Teacher Dashboard
            </p>

            <h1 class="mt-1 text-4xl font-semibold text-stone-800">
                Welcome back, {{ Auth::user()->name }}
            </h1>

            <p class="mt-3 text-stone-600 max-w-2xl leading-relaxed">
                Kelola jadwal mengajar anda, lihat booking siswa,
                dan pantau aktivitas pembelajaran private.
            </p>
        </div>

        <button
            class="rounded-2xl bg-stone-800 px-6 py-3 text-sm font-medium text-white transition hover:bg-stone-700">
            Manage Schedule
        </button>

    </div>

    <!-- Stats -->
    <div class="mt-10 grid gap-6 md:grid-cols-3">

        <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

            <p class="text-sm text-stone-500">
                Active Students
            </p>

            <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                24
            </h2>

        </div>

        <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

            <p class="text-sm text-stone-500">
                Today Classes
            </p>

            <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                6
            </h2>

        </div>

        <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

            <p class="text-sm text-stone-500">
                Monthly Income
            </p>

            <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                Rp8.5JT
            </h2>

        </div>

    </div>

    <!-- Content -->
    <div class="mt-10 grid gap-6 lg:grid-cols-3">

        <!-- Schedule -->
        <div class="lg:col-span-2 rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <h2 class="text-xl font-semibold text-stone-800">
                        Teaching Schedule
                    </h2>

                    <p class="mt-1 text-sm text-stone-500">
                        Jadwal kelas yang akan berlangsung.
                    </p>
                </div>

            </div>

            <div class="mt-8 space-y-5">

                <div class="rounded-2xl bg-stone-100 p-5 ">

                    <div class="flex items-center justify-between">

                        <div>
                            <h3 class="font-semibold text-stone-800">
                                Mathematics Private Class
                            </h3>

                            <p class="mt-1 text-sm text-stone-500">
                                Ahmad Fauzan • 20 November 2026
                            </p>
                        </div>

                        <span
                            class="rounded-full bg-sky-100 px-4 py-2 text-sm font-medium text-sky-600">
                            Online
                        </span>

                    </div>

                </div>

                <div class="rounded-2xl bg-stone-100 p-5 mt-5">

                    <div class="flex items-center justify-between">

                        <div>
                            <h3 class="font-semibold text-stone-800">
                                English Speaking Class
                            </h3>

                            <p class="mt-1 text-sm text-stone-500">
                                Salsa Aulia • 30 November 2026
                            </p>
                        </div>

                        <span
                            class="rounded-full bg-orange-100 px-4 py-2 text-sm font-medium text-orange-600">
                            Offline
                        </span>

                    </div>

                </div>

            </div>

        </div>

        <!-- Profile -->
        <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

            <h2 class="text-xl font-semibold text-stone-800">
                Teacher Profile
            </h2>

            <div class="mt-8 flex items-center gap-4">

                <div class="size-16 rounded-2xl bg-stone-200"></div>

                <div>
                    <h3 class="font-semibold text-stone-800">
                        {{ Auth::user()->name }}
                    </h3>

                    <p class="text-sm text-stone-500">
                        Professional Mentor
                    </p>
                </div>

            </div>

            <button
                class="mt-8 w-full rounded-2xl border border-stone-300 px-4 py-3 text-sm font-medium text-stone-700 transition hover:bg-stone-100">
                Profile Setting
            </button>

        </div>

    </div>

</div>