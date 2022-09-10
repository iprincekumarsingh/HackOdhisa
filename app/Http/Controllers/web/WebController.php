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
    public function search(Request $search)
    {
        echo $search;
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
        # code...
    }
}
