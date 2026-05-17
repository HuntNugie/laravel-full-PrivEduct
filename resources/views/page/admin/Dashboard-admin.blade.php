<div class="max-w-7xl mx-auto px-6 lg:px-8 py-10">

    <!-- Welcome -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

        <div>
            <p class="text-sm text-orange-500 font-medium">
                Admin Dashboard
            </p>

            <h1 class="mt-1 text-4xl font-semibold text-stone-800">
                Welcome back, {{ Auth::user()->name }}
            </h1>

            <p class="mt-3 text-stone-600 max-w-2xl leading-relaxed">
                Monitor seluruh aktivitas platform, kelola guru,
                siswa, booking kelas, dan statistik sistem pembelajaran private.
            </p>
        </div>

        <button
            class="rounded-2xl bg-stone-800 px-6 py-3 text-sm font-medium text-white transition hover:bg-stone-700">
            Manage Platform
        </button>

    </div>

    <!-- Stats -->
    <div class="mt-10 grid gap-6 md:grid-cols-4">

        <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

            <p class="text-sm text-stone-500">
                Total Students
            </p>

            <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                2.540
            </h2>

        </div>

        <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

            <p class="text-sm text-stone-500">
                Active Teachers
            </p>

            <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                530
            </h2>

        </div>

        <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

            <p class="text-sm text-stone-500">
                Today Bookings
            </p>

            <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                184
            </h2>

        </div>

        <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

            <p class="text-sm text-stone-500">
                Monthly Revenue
            </p>

            <h2 class="mt-4 text-4xl font-semibold text-stone-800">
                Rp48JT
            </h2>

        </div>

    </div>

    <!-- Content -->
    <div class="mt-10 grid gap-6 lg:grid-cols-3">

        <!-- Activity -->
        <div class="lg:col-span-2 rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

            <div class="flex items-center justify-between">

                <div>
                    <h2 class="text-xl font-semibold text-stone-800">
                        Recent Activity
                    </h2>

                    <p class="mt-1 text-sm text-stone-500">
                        Aktivitas terbaru pada platform.
                    </p>
                </div>

            </div>

            <div class="mt-8 space-y-4">

                <div class="rounded-2xl bg-stone-100 p-5">

                    <div class="flex items-center justify-between">

                        <div>
                            <h3 class="font-semibold text-stone-800">
                                New Teacher Registration
                            </h3>

                            <p class="mt-1 text-sm text-stone-500">
                                Sarah Wijaya mengajukan verifikasi guru.
                            </p>
                        </div>

                        <span
                            class="rounded-full bg-orange-100 px-4 py-2 text-sm font-medium text-orange-600">
                            Pending
                        </span>

                    </div>

                </div>

                <div class="rounded-2xl bg-stone-100 p-5">

                    <div class="flex items-center justify-between">

                        <div>
                            <h3 class="font-semibold text-stone-800">
                                New Booking Class
                            </h3>

                            <p class="mt-1 text-sm text-stone-500">
                                Private Mathematics booked by Ahmad Fauzan.
                            </p>
                        </div>

                        <span
                            class="rounded-full bg-emerald-100 px-4 py-2 text-sm font-medium text-emerald-600">
                            Confirmed
                        </span>

                    </div>

                </div>

            </div>

        </div>

        <!-- Quick Menu -->
        <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

            <h2 class="text-xl font-semibold text-stone-800">
                Quick Menu
            </h2>

            <div class="mt-8 space-y-4">

                <button
                    class="w-full rounded-2xl bg-stone-800 px-4 py-3 text-sm font-medium text-white transition hover:bg-stone-700">
                    Verify Teachers
                </button>

                <button
                    class="w-full rounded-2xl border border-stone-300 px-4 py-3 text-sm font-medium text-stone-700 transition hover:bg-stone-100">
                    Manage Users
                </button>

                <button
                    class="w-full rounded-2xl border border-stone-300 px-4 py-3 text-sm font-medium text-stone-700 transition hover:bg-stone-100">
                    Booking Reports
                </button>

                <button
                    class="w-full rounded-2xl border border-stone-300 px-4 py-3 text-sm font-medium text-stone-700 transition hover:bg-stone-100">
                    Payments
                </button>

            </div>

        </div>

    </div>

</div>