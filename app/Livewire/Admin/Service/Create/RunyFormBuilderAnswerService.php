<?php

namespace App\Livewire\Admin\Service\Create;

use Livewire\Component;

class RunyFormBuilderAnswerService extends Component
{

    public $answer , $answer_title , $answer_value , $showSave=false ;

    public function mount()
    {
        $this->answer_title = $this->answer->answer_title ;
        $this->answer_value = $this->answer->answer_value ;
    }
    public function render()
    {
        return view('livewire.admin.service.create.runy-form-builder-answer-service');
    }

    public function updated()
    {
        $this->showSave = false ;
    }

    public function save()
    {
        $this->showSave = true ;
        $this->answer->answer_title =  $this->answer_title ;
        $this->answer->answer_value =  $this->answer_title ;
        $this->answer->save() ;
    }
}
