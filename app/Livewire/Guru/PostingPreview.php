<?php

namespace App\Livewire\Guru;

use App\Models\Posting;
use Livewire\Attributes\On;
use Livewire\Component;

class PostingPreview extends Component
{
    public $posting;

    #[On("posting_updated")]
    public function refreshPosting(){
        $this->posting[0]->refresh();

    }
    public function render()
    {
        return view('livewire.guru.posting-preview');
    }
}
