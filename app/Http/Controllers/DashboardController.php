<?php

namespace App\Http\Controllers;

use App\Models\IslaSur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard ()
    {
        if(Auth::user()->name == 'Reman Edem'){

            $islasurdata = IslaSur::get();
            return view('investors.remanedem', ['islasurdata' => $islasurdata]);
        }
    }

    public function remanearning ()
    {
        $fromjanuarycustomer = IslaSur::where('january', 'like', 'yes')->get();
        $fromfebuarycustomer = IslaSur::where('febuary', 'like', 'yes')->get();
        $frommarchcustomer = IslaSur::where('march', 'like', 'yes')->get();


         return view('investores.remanedemstatus', [
            'deduction' => 1500,
            'january' => count($fromjanuarycustomer)*200,
            'febuary' => count($fromfebuarycustomer)*200,
            'march' => count($frommarchcustomer)*200,
         ]);
    }
}
