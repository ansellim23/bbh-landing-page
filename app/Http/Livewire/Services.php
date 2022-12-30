<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServicesModel;

class Services extends Component
{
    public $serviceID;

    public function mount($id){
        $this->serviceID = $id;
    }

    public function render()
    {
        $service_data = ServicesModel::where('serviceID','=',$this->serviceID)->first();
        return view('livewire.services')->with(['service_data'=>$service_data]);
    }
}
