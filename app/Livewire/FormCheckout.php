<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Guru;
use App\Service\OrderService;
class FormCheckout extends Component
{
    public Guru $guru;
    public string $jadwal_belajar = "";
    public string $metode_belajar = "";
    public ?string $catatan = null;
    public $show = false;
    public function save(OrderService $checkoutService){
       $validated = $this->validate([
            "jadwal_belajar" => "required|string",
            "metode_belajar" => "required|in:online,offline",
            "catatan" => "nullable|string",
        ]);

        $data = [
            "jadwal_belajar" => $this->jadwal_belajar,
            "metode_belajar" => $this->metode_belajar,
            "catatan" => $this->catatan,
            "tarif" => $this->guru->posting->tarif
        ];
        

        $order = $checkoutService->createOrder($data, $this->guru->id, auth()->user()->id);
        
        $this->show = true;
    }
    public function confirm(){
        return redirect()->route("dashboard");
    }
    public function render()
    {
        return view('livewire.form-checkout');
    }
}
