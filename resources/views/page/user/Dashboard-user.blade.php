
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">

        <!-- Welcome -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

            <div>
                <p class="text-sm text-stone-500">
                    Welcome back,
                </p>

                <h1 class="mt-1 text-4xl font-semibold text-stone-800">
                    {{ Auth::user()->name }}
                </h1>

                <p class="mt-3 text-stone-600 max-w-2xl leading-relaxed">
                    Kelola pembelajaran private anda, lihat jadwal kelas,
                    mentor aktif, dan progress belajar anda.
                </p>
            </div>

            <button class="rounded-2xl bg-stone-800 px-6 py-3 text-sm font-medium text-white transition hover:bg-stone-700">
                Book New Class
            </button>

        </div>

        <!-- Stats -->
        <div class="mt-10 grid gap-6 md:grid-cols-3">

            <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

                <p class="text-sm text-stone-500">
                    Active Classes
                </p>

                <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                    4
                </h2>

            </div>

            <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

                <p class="text-sm text-stone-500">
                    Completed Sessions
                </p>

                <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                    28
                </h2>

            </div>

            <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

                <p class="text-sm text-stone-500">
                    Learning Hours
                </p>

                <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                    56h
                </h2>

            </div>

        </div>

        <!-- Content -->
        <div class="mt-10 grid gap-6 lg:grid-cols-3">

            <!-- Upcoming Class -->
            <div class="lg:col-span-2 rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <h2 class="text-xl font-semibold text-stone-800">
                            Upcoming Class
                        </h2>

                        <p class="mt-1 text-sm text-stone-500">
                            Jadwal pembelajaran terdekat anda.
                        </p>
                    </div>

                </div>

                <div class="mt-8 rounded-2xl bg-stone-100 p-6">

                    <div class="flex items-start justify-between">

                        <div>
                            <p class="text-sm text-stone-500">
                                Mathematics Private Class
                            </p>

                            <h3 class="mt-2 text-2xl font-semibold text-stone-800">
                                Calculus Fundamentals
                            </h3>

                            <p class="mt-3 text-stone-600">
                                Dengan mentor: Michael Anderson
                            </p>
                        </div>

                        <span class="rounded-full bg-white px-4 py-2 text-sm font-medium text-stone-700">
                            Tomorrow
                        </span>

                    </div>

                </div>

            </div>

            <!-- Mentor -->
            <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                <h2 class="text-xl font-semibold text-stone-800">
                    Active Mentor
                </h2>

                <div class="mt-8 flex items-center gap-4">

                    <div class="size-16 rounded-2xl bg-stone-200"></div>

                    <div>
                        <h3 class="font-semibold text-stone-800">
                            Michael Anderson
                        </h3>

                        <p class="text-sm text-stone-500">
                            Mathematics Mentor
                        </p>
                    </div>

                </div>

                <button class="mt-8 w-full rounded-2xl border border-stone-300 px-4 py-3 text-sm font-medium text-stone-700 transition hover:bg-stone-100">
                    View Profile
                </button>

            </div>

        </div>

    </div>
