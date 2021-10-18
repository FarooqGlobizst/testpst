<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meter extends Model
{
    use HasFactory;

    public function reading()
    {
        return $this->hasMany(Reading::class);
    }

    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
    }

    public function meter_location()
    {
        return $this->belongsTo(Meter_Location::class);
    }
    
}
