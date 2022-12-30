<?php

namespace App\Http\Livewire\HomepageComponent;

use Livewire\Component;
use App\Models\ServicesModel;

class Services extends Component
{
    public function render()
    {
        $service_data = ServicesModel::where('service_status','=',1)->get();
        return view('livewire.homepage-component.services')->with(['service_data'=>$service_data]);
    }
}
