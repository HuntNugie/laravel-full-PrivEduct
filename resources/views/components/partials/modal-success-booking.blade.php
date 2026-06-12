  <x-dialog-modal wire:model="show">

      <x-slot name="title">
          Booking Berhasil
      </x-slot>

      <x-slot name="content">
          Booking guru telah berhasil. Silakan menunggu konfirmasi dari guru.
      </x-slot>

      <x-slot name="footer">
          <x-button class="ml-2 bg-red-500" wire:click="confirm()">
              oke
          </x-button>
      </x-slot>
  </x-dialog-modal>
