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
    public function  login()
    {
        return view('hospital.register');
    }
    public function hVerify()
    {
        return view('auth.hospital-verify');
        # code...
    }
    protected function create(Request $request)
    {
        $data = $request->validate([
            'phone_number' => ['required', 'numeric'],

        ]);
        $rand = rand(1231, 9999);
        $message = "Hospital Registration  Otp is {$rand} , Don`t share Otp with others";
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);

        $twilio->messages->create('+91' . $request->phone_number, [
            'from' => '+15737875222',
            'body' => $message
        ]);

        $check_user = Hospitals::where('contact', $request['phone_number'])->first();

        if ($check_user == null) {
            Hospitals::create([
                'contact' => $data['phone_number'],
                'code' => $rand,
                'username' => $data['phone_number']

            ]);
        } else {
            Hospitals::where('contact', $request['phone_number'])
                ->update(
                    [
                        'code' => $rand
                    ]
                );
        }
        return redirect()->route('hospital.verify')->with(['phone_number' => $data['phone_number']]);
    }
    // public function create(Request $request)
    // {

    //     $data = $request->validate([
    //         'hospital_name' => ['required'],
    //         'username' => ['required'],
    //         'password' => ['required'],
    //         'address' => ['required'],
    //         'pincode' => ['required'],
    //         'contact' => ['required'],
    //         'alter_no' => ['required'],
    //         'ownership' => ['required']
    //     ]);
    //     $data = Hospitals::where('username', $request['username'])->get();
    //     if ($data == null) {
    //         Hospitals::create([
    //             'hospital_name' => $request['hospital_name'],
    //             'username' => $request['username'],
    //             'password' => $request['password'],
    //             'address' => $request['address'],
    //             'pincode' => $request['pincode'],
    //             'contact' => $request['contact'],
    //             'alter_no' => $request['alter_no'],
    //             'ownership' => $request['ownership'],

    //         ]);

    //         $rand = rand(1231, 9999);
    //         $message = "Your Hospital Verification OTP is {{$rand}} , OTP is valid till 5 min";
    //         /* Get credentials from .env */
    //         $token = getenv("TWILIO_AUTH_TOKEN");
    //         $twilio_sid = getenv("TWILIO_SID");
    //         $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
    //         $twilio = new Client($twilio_sid, $token);

    //         $twilio->messages->create('+91' . $request->phone_number, [
    //             'from' => '+15737875222',
    //             'body' => $message
    //         ]);
    //         return redirect()->route('hospital.verify')->with(['phone_number' => $data['contact']]);
    //     } else {
    //         return back()->with(['error' => 'Hospital / Username alerady exist entered!']);
    //     }
    // }
    protected function verify(Request $request)
    {
        // data coming from the form
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone_number' => ['required', 'string'],

        ]);

        $datap = Hospitals::where('contact', $request['phone_number'])
            ->where('code', $request['verification_code'])->get();

        if ($datap->count()) {
            echo "OTP IS CORRECT";
            session()->put('isLoggedIn', 1);
            session()->put('phone', $request['phone_number']);
            return redirect()->route('home.index')->with(['message' => 'Phone number verified']);
        } else {
            echo "OTP ERROR";
            return back()->with(['phone_number' => $data['phone_number'], 'error' => 'Invalid verification code entered!']);
        }
    }
}
