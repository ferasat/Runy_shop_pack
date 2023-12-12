<?php

namespace App\Livewire\User\Service;

use Livewire\Component;

class Service extends Component
{
    public $service , $breadcrumbs , $havePrice=0 ;

    #[Rule('required|min:11|max:11')]
    public $cellphone;

    public function mount()
    {
        if ($this->service->price > 1){
            $this->havePrice = 1 ;
        }else{
            $this->havePrice = 0;
        }
    }

    public function render()
    {
        return view('livewire.user.service.service');
    }

    public function regRequest($service_id)
    {
        return $this->redirect(asset('/service/reserve/'.$service_id));
    }

}
