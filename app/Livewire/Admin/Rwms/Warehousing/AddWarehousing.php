<?php

namespace App\Livewire\Admin\Rwms\Warehousing;

use Livewire\Component;
use RunyWarehousing\Models\RunyWMS;

class AddWarehousing extends Component
{
    public $title , $capacity=0 , $type='استاندارد' , $place , $edit_status=false , $wm ;

    public function mount(){
        if ($this->edit_status){
            $this->title = $this->wm->title ;
            $this->capacity = $this->wm->capacity ;
            $this->type = $this->wm->type ;
            $this->place = $this->wm->place ;
        }
    }

    public function render()
    {
        return view('livewire.admin.rwms.warehousing.add-warehousing');
    }

    public function addW()
    {
        $wm = RunyWMS::query()->where('title' , $this->title)->first();
        if ($wm){
            $runyWM = new RunyWMS();
            $runyWM->create($this->title , $this->place , $this->type , $this->capacity );
        }

    }

    public function editW()
    {
        $this->wm->title = $this->title ;
        $this->wm->capacity = $this->capacity ;
        $this->wm->type = $this->type ;
        $this->wm->place = $this->place ;
        $this->wm->save() ;
    }
}
