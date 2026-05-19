<?php

namespace App\Livewire;

use App\Models\Guru;
use Livewire\Component;

class DaftarGuruHome extends Component
{
    public function render()
    {
        $gurus = Guru::with("user")->where("status","approved")->get();
        return view('livewire.daftar-guru-home',compact("gurus"));
    }
}
