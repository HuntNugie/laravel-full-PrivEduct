  <x-dialog-modal wire:model="show">

      <x-slot name="title">
        Apakah user sudah melakukan pembelajaran ? 
      </x-slot>


      <x-slot name="content">
         Jika anda yakin, klik tombol "Ya, Saya Yakin"
      </x-slot>

      {{-- Bagian Tombol/Bawah --}}
      <x-slot name="footer">
          <x-secondary-button wire:click="$set('show', false)">
              Tutup
          </x-secondary-button>

          <x-button class="ml-2 bg-green-500" wire:click="confirmBelajar({{ $id }})">
              Ya, saya yakin
          </x-button>
      </x-slot>
  </x-dialog-modal>
