<?php

namespace App\Livewire\Admin\RunySliderB5;

use Livewire\Component;
use Livewire\WithPagination;
use RunySliderB5\Models\RunySliderB5;

class IndexSlides extends Component
{
    use WithPagination ;

    public function render()
    {
        return view('livewire.admin.runy-slider-b5.index-slides' , [
            'slides'=> RunySliderB5::query()->orderByDesc('id')->paginate(15),
        ]);
    }
}
