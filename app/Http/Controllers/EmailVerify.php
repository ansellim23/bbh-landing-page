<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class EmailVerify extends Controller
{
    public static function userVerify($token){
        $userData = User::where('email_verified_token','=',$token)->first();
        
        if($token == $userData->email_verified_token){
            User::where('id',$userData->id)
            ->update([
                'email_verified_at'=>Carbon::now(),
            ]);
        }

        return redirect()->route('register')->with(session()->flash('message', 'You have successfully verified your email address'));
    }
}
