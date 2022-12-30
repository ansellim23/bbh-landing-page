<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\ServicesModel;

class Nav extends Component
{
    public function render()
    {
        $service_nav_data = ServicesModel::where('service_status','=',1)->get();
        return view('livewire.components.nav')->with(['service_nav_data'=>$service_nav_data]);
    }

    public function logout(){
        auth()->logout();
        return redirect(url('login'));
    }
}
