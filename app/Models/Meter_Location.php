<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meter_Location extends Model
{
    use HasFactory;

    public function meter()
    {
        return $this->hasMany(Meter::class);
    }
}
