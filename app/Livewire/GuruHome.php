<?php

namespace App\Livewire;

use App\Models\Posting;
use Livewire\Component;

class GuruHome extends Component
{
    public $gurus;

    public function mount(){
        $this->gurus = Posting::with(["guru"])->where("status_publish","published")->take(3)->latest()->get();

    }
    public function render()
    {
        return view('livewire.guru-home');
    }
}
