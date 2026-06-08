<?php

namespace App\Livewire;

use App\Models\Guru;
use App\Service\PostingService;
use Livewire\Component;

class DaftarGuruHome extends Component
{
    
    public function render(PostingService $posting)
    {
        $gurus = $posting->getPostinganPublished();
        return view('livewire.daftar-guru-home',compact("gurus"));
    }
}
