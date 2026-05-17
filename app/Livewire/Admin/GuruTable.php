<?php

namespace App\Livewire\Admin;

use App\Models\Guru;
use Livewire\Component;

class GuruTable extends Component
{
  
    public function render()
    {
        $gurus = Guru::with("User")->get();
        return view('livewire.admin.guru-table',["gurus" => $gurus]);
    }
}
