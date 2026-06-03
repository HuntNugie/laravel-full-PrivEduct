<?php

namespace App\Livewire\Guru;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Posting extends Component
{
    public $posting;
    public function mount(){
        $this->posting = Auth::user()->guru->posting()->get();
    }
    public function render()
    {
        return view('livewire.guru.posting');
    }
}
