<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;

class ForgotPasswordView extends Component
{
    public $token,$password,$password_confirmation,$userID;

    public function mount($token){
        $this->token = $token;
        $user_model = User::where('forgot_password_token', '=', $this->token)->first();
        $this->userID = $user_model->id;
    }

    public function render()
    {
        $user_model = User::where('forgot_password_token', '=', $this->token)->first();
        if(!empty($user_model)){
            $returnData = ['user_model'=>$user_model, session()->flash('message', 'Email Address found')];
        }

        if(empty($user_model)){
            $returnData = session()->flash('error', 'Email not found');
        }
        return view('livewire.forgot-password-view')->with($returnData);
    }

    public function newPassword(){
        $validated_data = $this->validate([
            'password' => 'required|confirmed|min:8'
        ]);

        $this->password = Hash::make($this->password);
        User::where('id', $this->userID)
            ->update([
                'password' => $this->password,
            ]);
        return redirect()->route('login')->with(session()->flash('message', 'You have successfully changed your password'));
    }
}
