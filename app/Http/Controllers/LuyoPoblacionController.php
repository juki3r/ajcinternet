<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuyoPoblacion;

class LuyoPoblacionController extends Controller
{
    public function luyo ()
    {   
        $luyodata = LuyoPoblacion::get();
        return view('include.luyopoblacion', ['luyodata' => $luyodata]);
        
    }
}
