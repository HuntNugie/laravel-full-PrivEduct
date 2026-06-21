<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;

#[Guarded(["id"])]
class Transactions extends Model
{
    // relasi ke order
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
