<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meter;
use App\Models\Reading;

class MeterController extends Controller
{
    //

    public function index(){

        $meters = Meter::all();
        $readings = Reading::paginate();
        
        return view('readings.index', [
            'readings'=>$readings
            
        ]);
    }
    
    
    
}
