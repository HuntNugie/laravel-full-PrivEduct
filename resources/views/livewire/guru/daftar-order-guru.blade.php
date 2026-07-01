<div class="space-y-8">
    <div class="rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <h1 class="text-xl font-semibold text-stone-900">Daftar Order Guru</h1>
                <p class="mt-1 text-sm text-stone-500">Kelola pesanan siswa dengan tampilan yang lebih rapi dan simetris.
                </p>
            </div>
            <div class="grid w-full grid-cols-2 gap-2 sm:grid-cols-3 lg:w-auto lg:grid-cols-6">
                <button wire:click="filterSemuaStatus" @class(["rounded-2xl px-4 py-2 text-sm font-medium ",
                "bg-stone-900 text-white" => $filter === "all",
                "border border-stone-300 bg-white text-stone-700" => $filter !== "all"
                ])>
                    Semua
                </button>
                <button wire:click="filterMenungguStatus"
                    @class(["rounded-2xl px-4 py-2 text-sm font-medium ",
                    "bg-stone-900 text-white" => $filter === "pending",
                    "border border-stone-300 bg-white text-stone-700" => $filter !== "pending"
                    ])>
                    Menunggu
                </button>
                <button wire:click="filterDiterimaStatus"
                    @class(["rounded-2xl px-4 py-2 text-sm font-medium ",
                    "bg-stone-900 text-white" => $filter === "accepted",
                    "border border-stone-300 bg-white text-stone-700" => $filter !== "accepted"
                    ])>
                    Diterima
                </button>
                <button wire:click="filterDibayarStatusBayar"
                    @class(["rounded-2xl px-4 py-2 text-sm font-medium ",
                    "bg-stone-900 text-white" => $filter === "paid",
                    "border border-stone-300 bg-white text-stone-700" => $filter !== "paid"
                    ])>
                    Dibayar
                </button>
                <button wire:click="filterBelajarStatusBelajar"
                    @class(["rounded-2xl px-4 py-2 text-sm font-medium ",
                    "bg-stone-900 text-white" => $filter === "belajar",
                    "border border-stone-300 bg-white text-stone-700" => $filter !== "belajar"
                    ])>
                    Belajar
                </button>
                <button wire:click="filterDitolakStatus"
                    @class(["rounded-2xl px-4 py-2 text-sm font-medium ",
                    "bg-stone-900 text-white" => $filter === "rejected",
                    "border border-stone-300 bg-white text-stone-700" => $filter !== "rejected"
                    ])>
                    Ditolak
                </button>
            </div>
        </div>
    </div>

    <div class="space-y-6">
        @forelse ($orders as $order)
            <article class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">
                <div class="grid gap-6 lg:grid-cols-[auto_1fr] lg:items-center">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset($order->user->profile_photo_url) }}"
                            class="flex h-16 w-16 items-center justify-center rounded-2xl bg-stone-100 text-2xl font-semibold text-stone-600"/>
                        
                        <div>
                            <h2 class="text-xl font-semibold text-stone-800">{{ $order->user->name }}</h2>
                            <p class="text-sm text-stone-500">Booking #{{ $order->id }}</p>
                        </div>
                    </div>

                    <div class="grid gap-3 sm:grid-cols-3">
                        <div class="rounded-3xl bg-stone-50 p-4 text-left">
                            <p class="text-sm text-stone-500">Konfirmasi</p>
                            @if ($order->status === 'pending')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-yellow-100 px-3 py-1 text-sm font-medium text-yellow-700">Menunggu</span>
                            @elseif ($order->status === 'accepted')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700">Diterima</span>
                            @elseif ($order->status === 'rejected')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-700">Ditolak</span>
                            @else
                                <span
                                    class="mt-2 inline-flex rounded-full bg-stone-100 px-3 py-1 text-sm font-medium text-stone-700">Tidak
                                    Diketahui</span>
                            @endif
                        </div>
                        <div class="rounded-3xl bg-stone-50 p-4 text-left">
                            <p class="text-sm text-stone-500">Pembayaran</p>
                            @if ($order->status_bayar === 'pending')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-yellow-100 px-3 py-1 text-sm font-medium text-yellow-700">Belum
                                    Dibayar</span>
                            @elseif ($order->status_bayar === 'paid')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700">Dibayar</span>
                            @endif
                        </div>
                        <div class="rounded-3xl bg-stone-50 p-4 text-left">
                            <p class="text-sm text-stone-500">Belajar</p>
                            @if ($order->status_belajar === 'pending')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-yellow-100 px-3 py-1 text-sm font-medium text-yellow-700">Belum Dimulai</span>
                            @elseif ($order->status_belajar === 'booking')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-blue-100 px-3 py-1 text-sm font-medium text-blue-700">Pembelajar di mulai</span>
                            @elseif ($order->status_belajar === 'completed')
                                <span
                                    class="mt-2 inline-flex rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700">Pembelajaran Selesai</span>
                            @else
                                <span
                                    class="mt-2 inline-flex rounded-full bg-stone-100 px-3 py-1 text-sm font-medium text-stone-700">Tidak
                                    Diketahui</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mt-8 grid gap-6 md:grid-cols-3">
                    <div class="rounded-3xl bg-stone-50 p-5">
                        <p class="text-sm text-stone-500">Jadwal</p>
                        <p class="mt-2 text-base font-medium text-stone-800">{{ $order->jadwal_belajar }}</p>
                    </div>
                    <div class="rounded-3xl bg-stone-50 p-5">
                        <p class="text-sm text-stone-500">Tarif</p>
                        <p class="mt-2 text-base font-medium text-stone-800">Rp
                            {{ number_format($order->tarif, 0, ',', '.') }}</p>
                    </div>
                    <div class="rounded-3xl bg-stone-50 p-5">
                        <p class="text-sm text-stone-500">Tanggal Booking</p>
                        <p class="mt-2 text-base font-medium text-stone-800">{{ $order->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>

                <div class="mt-6 rounded-3xl bg-stone-50 p-6">
                    <p class="text-sm font-medium text-stone-700">Pesan dari Siswa</p>
                    <p class="mt-3 text-stone-600 leading-relaxed">{{ $order->catatan }}</p>
                </div>

                <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:justify-end">
                    @if ($order->status === 'pending')
                    <button
                        class="rounded-2xl bg-green-600 px-6 py-3 text-sm font-medium text-white transition hover:bg-green-700"
                        wire:click="acceptOrder({{ $order->id }})">Terima Booking</button>
                    <button
                        class="rounded-2xl bg-red-600 px-6 py-3 text-sm font-medium text-white transition hover:bg-red-700"
                        wire:click="rejectOrder({{ $order->id }})">Tolak Booking</button>
                    @endif
                    <a href="{{ route('order.show', $order->id) }}"
                        class="rounded-2xl bg-blue-600 px-6 py-3 text-sm font-medium text-white transition hover:bg-blue-700">Detail
                        Pelajar</a>
                </div>
            </article>
        @empty
            <div class="rounded-3xl border border-stone-200 bg-white p-12 text-center text-stone-500">
                Belum ada order untuk ditampilkan.
            </div>
        @endforelse
    </div>
</div>
