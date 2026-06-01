<?php

namespace App\Livewire\Admin;

use App\Models\Guru;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class GuruTable extends Component
{
    public $show = false;
    public $guruId = null;
    private $gurus = "all";

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
    public function activeGuruData(){
        $this->gurus = "active";
    }
    public function allGuruData(){
        $this->gurus = "all";
    }
    public function pendingGuruData(){
        $this->gurus = "pending";
    }
    public function render()
    {
        $query = Guru::with("User");
        if ($this->gurus === "active") {
            $query = $query->where("status", "approved");
        }else if($this->gurus === "pending"){
            $query = $query->where("status", "pending");
        }
        return view('livewire.admin.guru-table', ["gurus" => $query->get()]);
    }
}
