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

    public function isApproved(): bool
    {
        return $this->status === "approved";
    }
    public function MataPelajarans(){
        return $this->belongsToMany(MataPelajaran::class,"guru_mata_pelajaran","guru_id","mata_pelajaran_id");
    }

    public function posting(){
        return $this->hasOne(Posting::class,"guru_id","id");
    }
    public function isHasPosting(){
        return $this->posting();
    }
}
