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

        $data = Hospitals::where('pincode', $search['pincode'])->get();


        if ($data != null) {
            // return redirect()->route('')
        } else {
            echo $data;
        }
        // echo $search;
    }
    public function profile()
    {
        return view('web.profile');
    }
    public function book()
    {
        return view('web.book');
    }
    public function previousBookib()
    {
        return view('web.previousboking');
        # code...
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
        # code...
    }
}
