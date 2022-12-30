<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;

class Login extends Component
{
    public $email, $password, $remember_me;

    public function render()
    {
        return view('livewire.login');
    }

    public function login(){
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = \Auth::getProvider()->retrieveByCredentials($validatedData);
        
        if(!\Auth::validate($validatedData)){
            session()->flash('error', 'Account does not exist.');
        }else{
            \Auth::login($user, $this->remember_me);
            User::where('id', '=', auth()->user()->id)
            ->update([
                'user_lastlogin' => Carbon::now()
            ]);

            session()->flash('message', "You have logged in successfully.");
        }
    }
}
