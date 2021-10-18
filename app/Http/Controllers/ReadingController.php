<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;
use App\Models\Meter;


class ReadingController extends Controller
{
    //
 public function index(){
    $readings = Reading::all();
    $meters = Meter::all();

    return view('readings.index', [
        'readings' => $readings,
        'meters' => $meters
        
    ]);

}

}
