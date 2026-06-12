<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class UpdateProfileForm extends Component
{
    public $no_hp = "";
    public $alamat = "";
    public $jenis_kelamin = "";
    public $tgl_lahir = "";
    public $pendidikan = "";

    public function mount(){
        $this->no_hp = auth()->user()->user_profile->no_hp ?? "";
        $this->alamat = auth()->user()->user_profile->alamat ?? "";
        $this->jenis_kelamin = auth()->user()->user_profile->jenis_kelamin ?? "";
        $this->tgl_lahir = auth()->user()->user_profile->tgl_lahir ?? "";
        $this->pendidikan = auth()->user()->user_profile->pendidikan ?? "";
    }

    public function update(){
        $validated = $this->validate([
            "no_hp"=>"numeric",
            "alamat" => "string|max:256",
            "jenis_kelamin" => "in:Laki-laki,Perempuan",
            "tgl_lahir" => "date",
            "pendidikan" => "in:sd,smp,sma,kuliah,no_pendidikan",
        ]);

        $user = auth()->user()->user_profile();
        $user->update($validated);
    }
    public function render()
    {
        return view('livewire.profile.update-profile-form');
    }
}
