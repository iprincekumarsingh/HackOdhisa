<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        # code...
        echo 'Home Page';
    }
    public function home()
    {
        return view('web.home');
    }
}
