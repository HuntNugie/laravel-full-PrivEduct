<?php

namespace App\Livewire;

use App\Service\CheckoutService;
use Livewire\Component;
use Livewire\WithPagination;

class DaftarCheckoutUser extends Component
{
    public String $search = "";
    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $userId = auth()->user()->id;
        $checkouts = auth()->user()->orders()->latest()->paginate(5);
        if( $this->search != ""){
            $checkouts = auth()->user()->orders()->whereHas("guru",function($query){
                $query->whereHas("User",function($query){
                    $query->where("name","like","%".$this->search."%");
                });
            })->latest()->paginate(5);
        }
        return view('livewire.daftar-checkout-user', ["checkouts" => $checkouts]);
    }
}
