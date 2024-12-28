<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NgoTypeTrans extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(NgoType::class);
    }
}
