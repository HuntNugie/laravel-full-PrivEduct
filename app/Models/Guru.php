<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    protected $guarded = ["id"];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
