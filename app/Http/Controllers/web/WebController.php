<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Hospitals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // echo "<pre>";
        $data = DB::table('hospitals')
            ->join('hospital_data', 'hospitals.hid', '=', 'hospital_data.hid')
            ->where('hospitals.pincode', $search['pincode'])
            ->get();

        // if ($data) {
            // return view('web.search');
            // return view('web.search')->with(['error' => 1]);
        // } else {
            return view('web.search', compact('data'));
        // }
        // echo "<pre>";
        // echo $data[0]['hospital_name']
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
