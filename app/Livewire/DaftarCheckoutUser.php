<?php

namespace App\Livewire;

use App\Service\CheckoutService;
use Livewire\Component;

class DaftarCheckoutUser extends Component
{
    public $checkouts;

    public function mount(CheckoutService $service){
        $this->checkouts = $service->getData();
    }
    public function render()
    {
        
        return view('livewire.daftar-checkout-user');
    }
}
