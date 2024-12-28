<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NgoType extends Model
{
    use HasFactory;
    public function trans()
    {
        return $this->hasMany(NgoTypeTrans::class);
    }
}
