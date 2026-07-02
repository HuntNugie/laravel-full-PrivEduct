<x-app-layout>

    <div class="max-w-5xl mx-auto px-6 lg:px-8 py-10">

        <!-- HEADER -->
        <div>
            <p class="text-sm font-medium text-orange-500">
                Payment Checkout
            </p>

            <h1 class="mt-2 text-3xl font-semibold text-stone-800">
                Konfirmasi Pembayaran Home Schooling
            </h1>

            <p class="mt-2 text-stone-600">
                Periksa kembali detail sebelum melakukan pembayaran.
            </p>
        </div>

        <!-- CARD DETAIL -->
        <div class="mt-10 bg-white border rounded-2xl shadow-sm p-6">

            <div class="grid gap-6 lg:grid-cols-[1.3fr_1fr]">

                <div class="space-y-6">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                        <div class="flex-shrink-0">
                            <img src="{{ asset("/storage/".$order->guru->posting->foto_cover) }}"
                                class="w-24 h-24 rounded-full object-cover border" alt="Guru">
                        </div>
                        <div class="w-full text-sm space-y-4">
                            <div class="flex justify-between">
                                <span class="text-stone-500">Nama Guru</span>
                                <span class="font-medium text-stone-800">{{ $order->guru->user->name }}</span>
                            </div>

                            <div class="flex justify-between">
                                <span class="text-stone-500">Nama Siswa</span>
                                <span class="font-medium text-stone-800">{{ auth()->user()->name }}</span>
                            </div>

                            <div class="flex justify-between">
                                <span class="text-stone-500">Tanggal Belajar</span>
                                <span class="font-medium text-stone-800">{{ $order->jadwal_belajar }}</span>
                            </div>

                            <div class="flex justify-between">
                                <span class="text-stone-500">Metode Belajar</span>
                                <span class="font-medium text-stone-800">{{ $order->metode_belajar }}</span>
                            </div>

                            <div class="flex justify-between">
                                <span class="text-stone-500">Tarif</span>
                                <span class="font-bold text-orange-600">Rp {{ number_format($order->tarif,0,",",) }} / sesi</span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-3 text-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-stone-500">Catatan</span>
                            <span class="text-stone-500">Detail tambahan</span>
                        </div>
                        <div
                            class="min-h-[130px] rounded-2xl border border-stone-200 bg-stone-50 p-4 text-stone-700 leading-relaxed">
                           {{$order->catatan}}
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-stone-200 bg-stone-50 p-6 flex flex-col justify-between">
                    <div class="space-y-6">
                        <div>
                            <span class="text-sm text-stone-500">Ringkasan Pembayaran</span>
                            <h2 class="mt-2 text-2xl font-semibold text-stone-800">Total Pembayaran</h2>
                        </div>

                        <div class="space-y-3 text-sm text-stone-600">
                            <div class="flex justify-between">
                                <span>Durasi Sesi</span>
                                <span>1 sesi</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Harga per Sesi</span>
                                <span>Rp {{ number_format($order->tarif,0,",",) }}</span>
                            </div>
                         
                        </div>
                    </div>

                    <div class="mt-6">
                        <div class="flex justify-between items-center text-xl font-bold text-stone-800">
                            <span>Total</span>
                            <span>Rp {{ number_format($order->tarif,0,",",) }}</span>
                        </div>

                        <button id="pay-button"
                            class="mt-6 w-full bg-orange-500 hover:bg-orange-600 text-white font-medium py-3 rounded-xl transition">
                            Bayar Sekarang
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @push('script')
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
        </script>

        <script>
            const button = document.getElementById("pay-button");
            button.addEventListener("click",()=>{
                snap.pay("{{ $snap_token }}",{
                    onSuccess:(result)=>{
                        console.log(result);
                        // window.location.href="{{ route('user.checkout.index') }}"
                    },
                    onPending:(result)=>{
                        window.location.href="{{ route('dashboard') }}"
                    },
                    onError:()=>{
                        alert("payment gagal");
                    }
                })
            })
        </script>
    @endpush

</x-app-layout>
