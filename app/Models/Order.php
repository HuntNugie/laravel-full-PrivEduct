<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;

#[Guarded(["id"])]
class Order extends Model
{
    public function guru(){
        return $this->belongsTo(Guru::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function transactions(){
        return $this->hasMany(Transactions::class,"order_id");
    }
}
