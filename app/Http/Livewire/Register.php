<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserEmailVerifyMail;

class Register extends Component
{
    public $firstname, $lastname, $email, $mobile_number, $birthday, $password, $password_confirmation,$email_verify_token;
    public $registerForm = false;
     
    public function render()
    {
        return view('livewire.register');
    }

    public function registerUser(){
        $validatedData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'birthday' => 'required|date|date_format:Y-m-d|before:'.now()->subYears(18)->toDateString(),
            'password' => 'required|confirmed|min:8'
        ]);

        $this->password = Hash::make($this->password);
        
        $this->email_verify_token = $this->randomPrefix();
        
        $this->name = $this->firstname.' '.$this->lastname;

        Mail::to($this->email)->send(new UserEmailVerifyMail($this->name,$this->email,$this->email_verify_token));

        User::create([
            'firstname' => $this->firstname, 
            'lastname' => $this->lastname,
            'email' => $this->email, 
            'mobile_number' => $this->mobile_number, 
            'birthday' => $this->birthday, 
            'password' =>  $this->password,
            'user_status' => 1,
            'email_verified_token' => $this->email_verify_token,
        ]);

        session()->flash('message', 'You have registered successfully.');
        
    }

    private function randomPrefix($length=24) {       
        $random = "";
        srand((double) microtime() * 1000000);
        $data = "A0B1C2DE3FG4HIJ5KLM6NOP7QR8ST9UVW0XYZ";
        for ($i = 0; $i < $length; $i++) {
            $random .= substr($data, (rand() % (strlen($data))), 1);
        }

        return $random;
    }
}
