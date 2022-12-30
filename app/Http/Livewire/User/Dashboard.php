<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserEmailVerifyMail;
use App\Models\User;
use Livewire\WithFileUploads;
use Hash;

class Dashboard extends Component
{
    use WithFileUploads;
    public $email_verify_token,
    $profile_picture,
    $old_password,
    $password,
    $password_confirmation,
    $firstname,
    $lastname,
    $email,
    $contact_number,
    $address,
    $birthday;

    public function render()
    {
        return view('livewire.user.dashboard');
    }

    public function mount(){
        $user_data = User::where('id','=',auth()->user()->id)->first();
        $this->firstname = $user_data->firstname;
        $this->lastname = $user_data->lastname;
        $this->email = $user_data->email;
        $this->contact_number = $user_data->mobile_number;
        $this->address = $user_data->address;
        $this->birthday = date('Y-m-d', strtotime($user_data->birthday));;
    }

    public function updateInfo(){
        $validated_data = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'birthday' => 'required|date|date_format:Y-m-d|before:'.now()->subYears(18)->toDateString(),
            'contact_number' => 'required',
            'address' => 'required'
        ]);

        User::where('id', '=', auth()->user()->id)
            ->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'birthday' => $this->birthday,
                'mobile_number' => $this->contact_number,
                'address' => $this->address,
            ]);

        session()->flash('message', 'You have updated your info.');
    }

    public function resendEmail(){
        $this->email_verify_token = $this->randomPrefix();
        
        $this->name = auth()->user()->firstname.' '.auth()->user()->lastname;

        Mail::to(auth()->user()->email)->send(new UserEmailVerifyMail($this->name,auth()->user()->email,$this->email_verify_token));

        User::where('id', '=', auth()->user()->id)
            ->update([
                'email_verified_token' => $this->email_verify_token
            ]);

        session()->flash('message', 'Your register successfully Go to the login page.');
    }

    public function uploadImage(){
        $validated_data = $this->validate([
            'profile_picture' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);

        $this->profile_picture = $this->profile_picture->store('user', 'public');

        User::where('id', auth()->user()->id)
        ->update([
            'profile_picture' => $this->profile_picture]);
        session()->flash('message', 'You have successfully updated your profile picture.');
    }

    public function changePassword(){
        $validated_data = $this->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);
        $user_data = User::where('id', auth()->user()->id)->first();
        if(Hash::check($this->old_password, $user_data->password)){
            $this->password = Hash::make($this->password); 
            User::where('id', auth()->user()->id)
            ->update([
                'password' => $this->password]);
            session()->flash('message', 'You have successfully updated your password.');
        }else{
            session()->flash('error', 'Your password did not match the record');
        }
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
