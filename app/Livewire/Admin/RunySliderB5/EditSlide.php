<?php

namespace App\Livewire\Admin\RunySliderB5;

use Livewire\Component;
use RunySliderB5\Models\RunySliderPics;
use Livewire\Attributes\On;

class EditSlide extends Component
{
    public $slide , $name , $text ;

    public function mount()
    {
        $this->name = $this->slide->name ;
        $this->text = $this->slide->text ;
    }

    public function render()
    {
        return view('livewire.admin.runy-slider-b5.edit-slide' , [
            'pics' => RunySliderPics::query()->where('runy_slider_id' , $this->slide->id)->orderByDesc('id')->get(),
        ] );
    }

    public function updated()
    {
        $this->slide->name = $this->name ;
        $this->slide->text = $this->text ;
        $this->slide->save() ;
    }

    public function addNewPic()
    {
        $newPic = new RunySliderPics();
        $newPic->runy_slider_id = $this->slide->id;
        $newPic->urlpic = 'theme/img/post.jpg';
        $newPic->save();

        $this->render();
    }

    #[On('pic-delete')]
    public function refreshPics()
    {
        $this->render();
    }

}
