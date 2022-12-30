<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceChildModel;

class ServicesChild extends Component
{
    public $service_childID;

    public function mount($id){
        $this->service_childID = $id;
    }

    public function render()
    {
        $service_child_data = ServiceChildModel::where('service_childID','=',$this->service_childID)->first();
        return view('livewire.services-child')->with(['service_child_data'=>$service_child_data]);
    }
}
