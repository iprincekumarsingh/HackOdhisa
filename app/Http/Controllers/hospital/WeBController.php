<?php

namespace App\Http\Controllers\hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeBController extends Controller
{
    //
    public function booking()
    {
        return view('hospital.booking');
        # code...
    }
    public function account()
    {
        return view('hospital.profile');
        # code...
    }
}
