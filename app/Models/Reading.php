<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;

    public function meter()
    {
        return $this->belongsTo(Meter::class);
    }

    public function consumer(){
        
            return $this->hasManyThrough(
                Consumer::class,
                Meter::class
               
                
                );
        
    }
}
