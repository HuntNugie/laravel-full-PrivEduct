<?php

namespace App\Livewire;

use App\Models\Guru;
use App\Models\MataPelajaran;
use App\Service\PostingService;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarGuruHome extends Component
{
    public $mataPelajaran;
    public int $MapelId = 0;
    public string $search = "";
    public string $metode = "";
    use WithPagination;
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->mataPelajaran = MataPelajaran::all();
    }
    public function render(PostingService $posting)
    {
        $gurus = $posting->getPostinganPublished()
            ->when($this->MapelId != 0, function ($query) {
                $query->whereHas("guru.MataPelajarans", function ($query) {
                    $query->where("mata_pelajaran_id", $this->MapelId);
                });
            })->when($this->search != "", function ($query) {
                $query->whereHas("guru.user", function ($query) {
                    $query->where("name", "like", "%" . $this->search . "%");
                });
            })->when($this->metode != "", function ($query) {
                $query->whereJsonContains("metode_belajar", $this->metode);
            })->latest()->paginate(6);



        return view('livewire.daftar-guru-home', compact("gurus"));
    }
}
