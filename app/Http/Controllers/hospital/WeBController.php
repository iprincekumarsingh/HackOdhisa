<?php

namespace App\Http\Controllers\hospital;

use App\Http\Controllers\Controller;
use App\Models\HospitalData;
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
        $data = HospitalData::where('hid',session('hid'))->get();
        return view('hospital.bed',compact('data'));
    }

    public function accountUpdate(Request $request)
    {

        $data = $request->validate([
            'hospital_name' => $request['hospital_name'],
            'username' => $request['username'],
            'password' => $request['password'],
            'address' => $request['address'],
            'pincode' => $request['pincode'],
            'contact' => $request['contact'],
            'alter_no' => $request['alter_no'],
            'ownership' => $request['ownership'],

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
    public function bedupdate(Request $request)
    {
        // $data = Hospitals::where('contact', session('contact'))->get();
        $id = session('hid');
        HospitalData::where('hid', $id)
            ->update([
                'g_bed' => $request['g_bed'],
                'icu' => $request['icu'],
                'iccu' => $request['iccu'],
                'mater' => $request['mater'],
                'apos' => $request['apos'],
                'bpos' => $request['bpos'],
                'anega' => $request['anega'],
                'bnega' => $request['bnega'],
                'abposi' => $request['abposi'],
                'abnega' => $request['abnega'],
                'opos' => $request['opos'],
                'onegative' => $request['onegative'],
                'hid'=>$id
            ]);
            return back();
    }
}
