<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ForgotPassword extends Component
{
    public $email_forgot_token, $email;

    public function render()
    {
        return view('livewire.forgot-password');
    }

    public function sendEmailForgot(){
        $user_data = User::where('email', '=', $this->email)->first();
        if(!empty($user_data)){
            $this->email_forgot_token = $this->randomPrefix();

            Mail::to($this->email)->send(new ForgotPasswordMail($this->email,$this->email_forgot_token));

            User::where('id', $user_data->id)->update([
                'forgot_password_token'=>$this->email_forgot_token
            ]);

            session()->flash('message', 'You have sent an email for forgot password');
        }

        if(empty($user_data)){
            session()->flash('error', 'Email not found');
        }   
    }

    private function randomPrefix($length=24) {       
        $random = "";
        srand((double) microtime() * 1000000);
        // $data = "0123456789";
        $data = "A0B1C2DE3FG4HIJ5KLM6NOP7QR8ST9UVW0XYZ";
        for ($i = 0; $i < $length; $i++) {
            $random .= substr($data, (rand() % (strlen($data))), 1);
        }

        return $random;
    }
}
