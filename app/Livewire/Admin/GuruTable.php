<?php

namespace App\Livewire\Admin;

use App\Models\Guru;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class GuruTable extends Component
{
    public $show = false;
    public $guruId = null;

    public function confirmDelete($id)
    {
        $this->guruId = $id;
        $this->show = true;
    }
    public function deleteGuru(): void
    {
        $guru = Guru::findOrFail($this->guruId);
        $guru->User->deleteProfilePhoto();
        if ($guru->cv && Storage::disk("public")->exists($guru->cv)) {
            Storage::disk("public")->delete($guru->cv);
        }
        $guru->delete();
        $guru->User->delete();

        $this->show = false;

    }
    public function render()
    {
        $gurus = Guru::with("User")->get();
        return view('livewire.admin.guru-table', ["gurus" => $gurus]);
    }
}
