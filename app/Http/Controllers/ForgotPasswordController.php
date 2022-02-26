<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ResetPassword;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view ('forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        ResetPassword::create([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordFrom($token) {
        return view ('forgetPasswordLink', ['token'=>$token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:users',
            'password'=>'required|string|min:6|confirmed',
            'password_confirmation'=>'required',
        ]);

        $updatePassword = ResetPassword::where([
                            'email'=>$request->email,
                            'token'=>$request->token
                        ])
                        ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password'=> Hash::make($request->password)]);

        ResetPassword::where(['email'=>$request->email])->delete();

        return redirect('/')->with('message', 'Your password has been changed!');
    }
}
