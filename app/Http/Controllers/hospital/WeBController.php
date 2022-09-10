<?php

namespace App\Http\Controllers\hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospitals;
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
    public function bed()
    {
        return view('hospital.bed');
    }

    public function accountUpdate(Request $request)
    {

        $data = $request->validate([
            'phone_number' => ['required', 'numeric'],

        ]);
        Hospitals::where('contact', $request['phone_number'])
            ->update(
                [
                    'hospital_name' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'address' => ['required'],
            'pincode' => ['required'],
            'contact' => ['required'],
            'alter_no' => ['required'],
            'ownership' => ['required']

                ]
            );
    }
}
