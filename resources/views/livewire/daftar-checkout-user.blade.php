<div>
    <!-- Filter -->
    <div class="mt-8 rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

        <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-sm font-medium text-orange-500">
                    Filter
                </p>
                <h2 class="mt-2 text-xl font-semibold text-stone-800">
                    Atur Checkout Anda
                </h2>
            </div>
        </div>

        <div class="mt-6 grid gap-6">

            <div class="grid gap-4">
                <div>
                    <label class="text-sm font-medium text-stone-500" for="confirmation-filter">
                        Filter Konfirmasi Guru
                    </label>

                    <select id="confirmation-filter" name="confirmation"
                        class="mt-3 w-full rounded-2xl border border-stone-200 bg-stone-50 px-4 py-3 text-stone-700 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100">
                        <option value="">Semua</option>
                        <option value="accepted">Diterima</option>
                        <option value="rejected">Ditolak</option>
                        <option value="pending">Menunggu</option>
                    </select>
                </div>

                <div>
                    <label class="text-sm font-medium text-stone-500" for="payment-filter">
                        Filter Status Pembayaran
                    </label>

                    <select id="payment-filter" name="payment"
                        class="mt-3 w-full rounded-2xl border border-stone-200 bg-stone-50 px-4 py-3 text-stone-700 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100">
                        <option value="">Semua</option>
                        <option value="paid">Lunas</option>
                        <option value="unpaid">Belum Bayar</option>
                        <option value="failed">Gagal</option>
                    </select>
                </div>

                <div>
                    <label class="text-sm font-medium text-stone-500" for="learning-filter">
                        Filter Status Belajar
                    </label>

                    <select id="learning-filter" name="learning"
                        class="mt-3 w-full rounded-2xl border border-stone-200 bg-stone-50 px-4 py-3 text-stone-700 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100">
                        <option value="">Semua</option>
                        <option value="not_started">Belum Dimulai</option>
                        <option value="in_progress">Sedang Berlangsung</option>
                        <option value="finished">Selesai</option>
                    </select>
                </div>

                <div>
                    <label class="text-sm font-medium text-stone-500" for="teacher-search">
                        Cari Guru
                    </label>

                    <input id="teacher-search" type="search" placeholder="Cari nama guru..."
                        class="mt-3 w-full rounded-2xl border border-stone-200 bg-stone-50 px-4 py-3 text-stone-700 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100" />
                </div>
            </div>

        </div>

    </div>

    <!-- List Checkout -->
    <div class="mt-10 space-y-6">

        @forelse ($checkouts as $checkout)
            <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

                <div class="flex flex-col gap-6 lg:flex-row lg:justify-between">

                    <!-- Informasi Guru -->
                    <div class="flex gap-4">

                        <img src="{{ asset('storage/' . $checkout->guru->posting->foto_cover) }}"
                            class="h-20 w-20 rounded-2xl object-cover">

                        <div>

                            <h2 class="text-xl font-semibold text-stone-800">
                                {{ $checkout->guru->user->name }}
                            </h2>

                            <p class="mt-1 text-stone-500">
                                {{ $checkout->guru->MataPelajarans->pluck('nama_mapel')->join(' , ') }}
                            </p>

                            <p class="mt-3 text-sm text-stone-500">
                                {{ $checkout->jadwal_belajar }}
                            </p>

                        </div>

                    </div>

                    <!-- Harga -->
                    <div>

                        <h3 class="text-2xl font-semibold text-orange-500">
                            Rp {{ number_format($checkout->tarif, 0, ',') }}
                        </h3>

                    </div>

                </div>

                <!-- Status -->
                <div class="mt-8 grid gap-4 md:grid-cols-3">

                    <div class="rounded-2xl bg-stone-50 p-4">

                        <p class="text-xs uppercase tracking-wide text-stone-600">
                            Konfirmasi Guru
                        </p>

                        @if ($checkout->status === 'accepted')
                            <p class="mt-2 font-medium text-green-700">
                                Konfirmasi di terima
                            </p>
                        @elseif ($checkout->status === 'pending')
                            <p class="mt-2 font-medium text-yellow-700">
                                Sedang menunggu konfirmasi guru
                            </p>
                        @else
                            <p class="mt-2 font-medium text-red-700">
                                booking di tolak guru
                            </p>
                        @endif

                    </div>

                    <div class="rounded-2xl bg-stone-50 p-4">

                        <p class="text-xs uppercase tracking-wide text-stone-600">
                            Pembayaran
                        </p>

                        @if ($checkout->status_bayar === 'pending')
                            <p class="mt-2 font-medium text-yellow-700">
                                Menunggu Pembayaran
                            </p>
                        @else
                            <p class="mt-2 font-medium text-green-700">
                                sudah di bayar
                            </p>
                        @endif

                    </div>

                    <div class="rounded-2xl bg-stone-100 p-4">

                        <p class="text-xs uppercase tracking-wide text-stone-600">
                            Status Belajar
                        </p>

                        @if ($checkout->status_belajar === 'pending')
                            <p class="mt-2 font-medium text-yellow-700">
                                Belum Dimulai
                            </p>
                        @elseif ($checkout->status_belajar === 'booking')
                            <p class="mt-2 font-medium text-blue-700">
                                sedang berjalan
                            </p>
                        @else
                            <p class="mt-2 font-medium text-green-700">
                                Telah selesai
                            </p>
                        @endif

                    </div>

                </div>

                <!-- Action -->
                <div class="mt-8 flex flex-wrap gap-3">

                    <button class="rounded-xl border border-stone-300 px-4 py-2 text-sm font-medium text-stone-700">

                        Detail Booking

                    </button>

                    @if ($checkout->status_bayar !== 'paid' && $checkout->status !== "pending" || $checkout->status === "reject")
                        <a href="{{ route('user.checkout.payment', $checkout->id) }}"
                            class="rounded-xl bg-orange-500 px-4 py-2 text-sm font-medium text-white hover:bg-orange-600">

                            Bayar Sekarang

                        </a>
                    @endif
                 
                </div>

            </div>
        @empty
            <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm text-center">
                <p class="text-lg font-semibold text-stone-800">
                    Belum ada checkout tersedia
                </p>
                <p class="mt-2 text-sm text-stone-500">
                    Kamu belum memiliki data checkout. Silakan mulai booking kelas atau kembali ke beranda.
                </p>
            </div>
        @endforelse


    </div>

</div>
</div>
