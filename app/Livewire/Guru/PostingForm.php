<?php

namespace App\Livewire\Guru;

use App\Service\FileUploadService;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostingForm extends Component
{
 
    use WithFileUploads;

    public $posting;
    public $caption,$tarif,$metode_belajar;
    public $foto_cover;
    public $pengalaman;
    public function mount(){
        $this->caption = $this->posting[0]->caption;
        $this->tarif = $this->posting[0]->tarif;
        $this->metode_belajar = $this->posting[0]->metode_belajar;
        $this->pengalaman = $this->posting[0]->pengalaman;
    }

    public function save(FileUploadService $file_upload){
        $validated = $this->validate([
            "caption" => "required|string",
            "tarif" => "required|numeric",
            "metode_belajar" => "required|array",
            "pengalaman" => "required|string",
            "foto_cover" => "image|mimes:jpeg,jpg,png"
        ]);

        if($this->foto_cover){  
            Storage::disk("public")->delete($this->posting[0]->foto_cover);
          $validated["foto_cover"] = $file_upload->upload($this->foto_cover,"cover_postingan");
        }

        $this->posting[0]->update($validated);

        $this->dispatch("posting_updated");

    }
    public function render()
    {
        return view('livewire.guru.posting-form');
    }
}
