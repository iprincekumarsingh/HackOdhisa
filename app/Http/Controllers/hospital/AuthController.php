<?php

namespace App\Http\Controllers\hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospitals;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('auth.hospital');
    }
    public function create(Request $request)
    {

        $data = $request->validate([
            'hospital_name' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'address' => ['required'],
            'pincode' => ['required'],
            'contact' => ['required'],
            'alter_no' => ['required'],
            'ownership' => ['required']
        ]);
        $data = Hospitals::where('username', $request['username'])->get();
        if ($data == null) {
            Hospitals::create([
                'hospital_name' => $request['hospital_name'],
                'username' => $request['username'],
                'password' => $request['password'],
                'address' => $request['address'],
                'pincode' => $request['pincode'],
                'contact' => $request['contact'],
                'alter_no' => $request['alter_no'],
                'ownership' => $request['ownership'],

            ]);
        } else {
            return back()->with(['error' => 'Hospital / Username alerady exist entered!']);
        }
    }
}
