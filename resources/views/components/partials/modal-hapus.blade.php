  <x-dialog-modal wire:model="show">

      <x-slot name="title">
          Yakin mau hapus data ? 
      </x-slot>


      <x-slot name="content">
         Data yang di hapus tidak dapat di kembalikan lagi
      </x-slot>

      {{-- Bagian Tombol/Bawah --}}
      <x-slot name="footer">
          <x-secondary-button wire:click="$set('show', false)">
              Tutup
          </x-secondary-button>

          <x-button class="ml-2 bg-red-500" wire:click="deleteGuru({{ $id }})">
              Hapus
          </x-button>
      </x-slot>
  </x-dialog-modal>
