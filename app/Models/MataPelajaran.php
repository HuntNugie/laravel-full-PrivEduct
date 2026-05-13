<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Guarded(["id"])]
class MataPelajaran extends Model
{
    
    public function guru():BelongsToMany{
        return $this->belongsToMany(Guru::class,"guru_mata_pelajaran","mata_pelajaran_id","guru_id");
    }
}
