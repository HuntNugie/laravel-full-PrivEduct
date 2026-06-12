<x-form-section submit="update">
    <x-slot name="title">
        {{ __('Profile lanjutan') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update profile lanjutan .') }}
    </x-slot>

    <x-slot name="form">
        <!-- No HP -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="no_hp" value="{{ __('No. HP') }}" />
            <x-input id="no_hp" type="tel" class="mt-1 block w-full" wire:model="no_hp" required />
            <x-input-error for="no_hp" class="mt-2" />
        </div>

        <!-- Alamat -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="alamat" value="{{ __('Alamat') }}" />
            <textarea id="alamat" class="mt-1 block w-full rounded-md shadow-sm border-gray-300" wire:model="alamat" rows="3"></textarea>
            <x-input-error for="alamat" class="mt-2" />
        </div>

        <!-- Jenis Kelamin -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="jenis_kelamin" value="{{ __('Jenis Kelamin') }}" />
            <select id="jenis_kelamin" class="mt-1 block w-full rounded-md" wire:model="jenis_kelamin">
                <option value="">-- {{ __('Pilih') }} --</option>
                <option value="Laki-laki">{{ __('Laki-laki') }}</option>
                <option value="Perempuan">{{ __('Perempuan') }}</option>
            </select>
            <x-input-error for="jenis_kelamin" class="mt-2" />
        </div>

        <!-- Tanggal Lahir -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="tgl_lahir" value="{{ __('Tanggal Lahir') }}" />
            <x-input id="tgl_lahir" type="date" class="mt-1 block w-full" wire:model="tgl_lahir" />
            <x-input-error for="tgl_lahir" class="mt-2" />
        </div>

        <!-- Pendidikan -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="pendidikan" value="{{ __('Pendidikan Sedang Ditempuh') }}" />
            <select wire:model="pendidikan" class="mt-1 block w-full rounded-md">
                <option value="">pilih</option>
                <option value="sd">Sekolah dasar(sd)</option>
                <option value="smp">Sekolah menengah pertama (smp)</option>
                <option value="sma">Sekolah menengah atas (sma)</option>
                <option value="kuliah">Kuliah</option>
                <option value="no_pendidikan">sedang tidak menempuh pendidikan</option>
            </select>
            <x-input-error for="pendidikan" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
