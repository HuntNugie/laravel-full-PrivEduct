<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;

#[Guarded(["id"])]
class Posting extends Model
{
    public function guru(){
        return $this->belongsTo(Guru::class);
    }
    protected $casts = ["metode_belajar"=>"array"];

   
}
