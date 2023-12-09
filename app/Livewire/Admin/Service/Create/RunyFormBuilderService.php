<?php

namespace App\Livewire\Admin\Service\Create;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use RunyFormBuilder\Models\RunyFormBuilder;
use RunyFormBuilder\Models\RunyFormBuilderQuestion;

class RunyFormBuilderService extends Component
{
    public $service  , $show=false , $question , $answer_type='checkbox'  , $form;
    protected $questions ;

    public function mount()
    {
        $this->form = RunyFormBuilder::query()->where([
            'type' => 'service',
            'type_id' => $this->service->id,
        ])->first();
        //dd($this->form);

        if ($this->form != null){
            $this->show = true ;
            $this->questions = RunyFormBuilderQuestion::query()->where([
                'runy_form_id' => $this->form->id,
                'where_id' => $this->service->id,
            ])->orderByDesc('id')->get();
        }
    }

    public function render()
    {
        return view('livewire.admin.service.create.runy-form-builder-service' , ['questions'=>$this->questions]);
    }

    public function need()
    {
        $this->form = new RunyFormBuilder();
        $this->form->title = $this->service->name;
        $this->form->type = 'service';
        $this->form->type_id = $this->service->id;
        $this->form->user_id = Auth::id();
        $this->form->save();

        $this->show= true;
        $this->render() ;
    }

    public function addQuestion()
    {
        //dd($this->service->id, $this->question, $this->form->id, $this->answer_type);
        $question = new RunyFormBuilderQuestion();
        $question->maker($this->service->id, $this->question, $this->answer_type , $this->form->id);

        $this->questions = RunyFormBuilderQuestion::query()->where([
            'runy_form_id' => $this->form->id,
            'where_id' => $this->service->id,
        ])->orderByDesc('id')->get();

        $this->render();
    }
}
