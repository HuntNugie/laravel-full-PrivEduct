  <div class="mt-10 grid gap-8 lg:grid-cols-3">

            <!-- Form Booking -->
            <div class="lg:col-span-2">

                <div class="rounded-3xl border border-stone-200 bg-white p-8 shadow-sm">

                    <h2 class="text-xl font-semibold text-stone-800">
                        Detail Booking
                    </h2>

                    <form class="mt-8 space-y-8" wire:submit.prevent="save">

                        <!-- Jadwal -->
                        <div>

                            <label class="block text-sm font-medium text-stone-700">
                                Jadwal Belajar
                            </label>

                            <input type="date"
                                class="mt-2 w-full rounded-2xl border-stone-300 bg-stone-50 focus:border-orange-500 focus:ring-orange-500" wire:model="jadwal_belajar">

                            <p class="mt-2 text-sm text-stone-500">
                                Pilih tanggal dan jam yang Anda inginkan.
                            </p>

                        </div>
                        <div>

                            <label class="block text-sm font-medium text-stone-700">
                                Metode belajar yang di inginkan
                            </label>

                            <select
                                class="mt-2 w-full h-16 px-6 rounded-2xl border border-slate-200 outline-none focus:border-orange-500 bg-white" wire:model="metode_belajar">
                                <option value="">Pilih Metode Belajar</option>
                                @foreach ($guru->posting->metode_belajar as $metode)
                                    <option value="{{ $metode }}">{{ ucfirst($metode) }}</option>
                                @endforeach
                            </select>

                            <p class="mt-2 text-sm text-stone-500">
                                Pilih tanggal dan jam yang Anda inginkan.
                            </p>

                        </div>

                        <!-- Pesan -->
                        <div>

                            <label class="block text-sm font-medium text-stone-700">
                                Pesan untuk Guru
                            </label>

                            <textarea rows="6"
                                class="mt-2 w-full rounded-2xl border-stone-300 bg-stone-50 focus:border-orange-500 focus:ring-orange-500"
                                wire:model="catatan"
                                placeholder="Contoh: Saya ingin belajar integral dasar dan persiapan ujian semester..."></textarea>

                            <p class="mt-2 text-sm text-stone-500">
                                Jelaskan materi atau tujuan pembelajaran yang ingin Anda capai.
                            </p>

                        </div>

                        <!-- Submit -->
                        <div class="flex justify-end">

                            <button type="submit" wire:loading.attr="disabled"
                                class="rounded-2xl bg-orange-500 px-6 py-3 text-sm font-medium text-white transition hover:bg-orange-600">

                                <span wire:loading.remove> Ajukan Booking </span>
                                <span wire:loading> Sedang diproses... </span>

                            </button>

                        </div>

                    </form>

                </div>

            </div>

            <!-- Ringkasan Guru -->
            <div>

                <div class="sticky top-6 rounded-3xl border border-stone-200 bg-white p-6 shadow-sm">

                    <h2 class="text-lg font-semibold text-stone-800">
                        Guru Terpilih
                    </h2>

                    <div class="mt-6">

                        <img src="{{ asset('/storage/' . $guru->posting->foto_cover) }}"
                            class="h-56 w-full rounded-3xl object-cover">

                    </div>

                    <div class="mt-6">

                        <h3 class="text-2xl font-semibold text-stone-800">
                            {{ $guru->user->name }}
                        </h3>

                        <p class="mt-2 text-orange-500 font-medium">
                            {{ $guru->MataPelajarans->pluck('nama_mapel')->join(', ') }}
                        </p>
                     
                        <p class="mt-2 text-black font-medium">
                        Tentang guru : {{ $guru->posting->caption }}
                        </p>

                    </div>

                    <div class="mt-6 border-t border-stone-200 pt-6">

                        <p class="text-sm text-stone-500">
                            Tarif Mengajar
                        </p>

                        <h3 class="mt-1 text-3xl font-semibold text-stone-800">
                            Rp. {{ number_format($guru->posting->tarif, 0, ',', '.') }}
                        </h3>

                        <p class="text-sm text-stone-500">
                            per sesi
                        </p>

                    </div>

                    <div class="mt-6 border-t border-stone-200 pt-6">

                        <p class="text-sm text-stone-500">
                            Metode Belajar
                        </p>

                        <div class="mt-3 flex flex-wrap gap-2">
                            @foreach ($guru->posting->metode_belajar as $jar)
                                @if ($jar === 'online')
                                    <span class="rounded-full bg-orange-100 px-3 py-1 text-sm font-medium text-orange-700">
                                        Online
                                    </span>
                                @else
                                    <span class="rounded-full bg-sky-100 px-3 py-1 text-sm font-medium text-sky-700">
                                        Offline
                                    </span>
                                @endif
                            @endforeach

                        </div>

                    </div>

                    <div class="mt-6 rounded-2xl bg-orange-50 p-4">

                        <p class="text-sm text-orange-700">

                            Setelah booking dikirim, guru akan meninjau permintaan Anda.
                            Pembayaran dilakukan setelah booking dikonfirmasi oleh guru.

                        </p>

                    </div>

                </div>

            </div>
            <x-partials.modal-success-booking/>

        </div>