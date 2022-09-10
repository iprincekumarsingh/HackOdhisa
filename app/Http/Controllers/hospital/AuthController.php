<?php

namespace App\Http\Controllers\hospital;

use App\Http\Controllers\Controller;
use App\Models\Hospitals;
use App\Models\User;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('auth.hospital');
    }
    public function hospitalverifyblade()
    {
        return view('auth.hospital-verify');
        # code...
    }
    public function home()
    {
        # code...
        return view('hospital.dashboard');
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

            $rand = rand(1231, 9999);
            $message = "Your Hospital Verification OTP is {{$rand}} , OTP is valid till 5 min";
            /* Get credentials from .env */
            $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_sid = getenv("TWILIO_SID");
            $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
            $twilio = new Client($twilio_sid, $token);

            $twilio->messages->create('+91' . $request->phone_number, [
                'from' => '+15737875222',
                'body' => $message
            ]);
            return redirect()->route('hospital.verify')->with(['phone_number' => $data['contact']]);
        } else {
            return back()->with(['error' => 'Hospital / Username alerady exist entered!']);
        }
    }
}
