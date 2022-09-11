<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Hospitals;
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

      
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
        # code...
    }
}
