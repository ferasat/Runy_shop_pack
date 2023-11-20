<?php

namespace App\Livewire\User\Home\Slide;

use Livewire\Component;
use RunySliderB5\Models\RunySliderPics;

class SlideShow extends Component
{
    public $slide , $homePage , $pics;

    public function mount()
    {

    }

    public function render()
    {
        //$this->pics = RunySliderPics::query()->where('runy_slider_id' , $this->homePage->slideshow_id)->get();
        return view('livewire.user.home.slide.slide-show');
    }
}
