<div>


    <form wire:submit="save" class="space-y-8">

        <!-- Caption -->
        <div>

            <label class="block text-sm font-medium text-stone-700">
                Foto_cover
            </label>

            @if ($foto_cover)
                <img src="{{ $foto_cover->temporaryUrl() }}" class="mt-3 h-48 w-48 rounded-xl object-cover border border-stone-200">
            @endif

            <input type="file" rows="6" wire:model="foto_cover"
                class="mt-2 w-full rounded-2xl border-stone-300 bg-stone-50 focus:border-stone-500 focus:ring-stone-500" />

            @error('caption')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror

        </div>
        <!-- Caption -->
        <div>

            <label class="block text-sm font-medium text-stone-700">
                Tentang Saya
            </label>

            <textarea wire:model="caption" rows="6"
                class="mt-2 w-full rounded-2xl border-stone-300 bg-stone-50 focus:border-stone-500 focus:ring-stone-500"
                placeholder="Perkenalkan diri Anda kepada calon siswa..."></textarea>

            @error('caption')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror

        </div>

        <!-- Tarif -->
        <div>

            <label class="block text-sm font-medium text-stone-700">
                Tarif Mengajar per Sesi
            </label>

            <input type="number" wire:model="tarif"
                class="mt-2 w-full rounded-2xl border-stone-300 bg-stone-50 focus:border-stone-500 focus:ring-stone-500"
                placeholder="150000">

            @error('tarif')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror

        </div>

        <!-- Metode Belajar -->
        <div>

            <label class="block text-sm font-medium text-stone-700">
                Metode Belajar
            </label>

            <div class="mt-4 flex flex-wrap gap-6">

                <label class="flex items-center gap-3">

                    <input type="checkbox" value="online" wire:model="metode_belajar">
                    <span>
                        Online
                    </span>

                </label>

                <label class="flex items-center gap-3">

                    <input type="checkbox" value="offline" wire:model="metode_belajar">

                    <span>
                        Offline
                    </span>

                </label>

            </div>

        </div>

        <!-- Pengalaman -->
        <div>

            <label class="block text-sm font-medium text-stone-700">
                Pengalaman Mengajar
            </label>

            <textarea wire:model="pengalaman" rows="5"
                class="mt-2 w-full rounded-2xl border-stone-300 bg-stone-50 focus:border-stone-500 focus:ring-stone-500"
                placeholder="Ceritakan pengalaman mengajar Anda..."></textarea>

            @error('pengalaman')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror

        </div>

        <!-- Tombol -->
        <div class="flex justify-end gap-4">

            <button type="submit"
                class="rounded-2xl bg-stone-800 px-6 py-3 text-sm font-medium text-white hover:bg-stone-700">

                Simpan Postingan

            </button>

        </div>

    </form>

</div>
