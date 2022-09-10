<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;

class AuthController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $data = $request->validate([
            'phone_number' => ['required', 'numeric'],

        ]);
        $rand = rand(1231, 9999);
        $message = "Your Otp is {$rand} , Don`t share Otp with others";
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);

        $twilio->messages->create('+91' . $request->phone_number, [
            'from' => '+15737875222',
            'body' => $message
        ]);

        $check_user = User::where('phone_number', $request['phone_number'])->first();

        if ($check_user == null) {
            User::create([
                'phone_number' => $data['phone_number'],
                'code' => $rand

            ]);
        } else {
            User::where('phone_number', $request['phone_number'])
                ->update(
                    [
                        'code' => $rand
                    ]
                );
        }
        return redirect()->route('verify')->with(['phone_number' => $data['phone_number']]);
    }

    protected function verify(Request $request)
    {
        // data coming from the form
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone_number' => ['required', 'string'],

        ]);

        $datap = User::where('phone_number', $request['phone_number'])
            ->where('code', $request['verification_code'])->get();

        if ($datap->count()) {
            echo "OTP IS CORRECT";
            session()->put('isLoggedIn', 1);
            session()->put('phone', $request['phone_number']);
            return redirect()->route('home')->with(['message' => 'Phone number verified']);
        } else {
            echo "OTP ERROR";
            return back()->with(['phone_number' => $data['phone_number'], 'error' => 'Invalid verification code entered!']);
        }
    }
}
