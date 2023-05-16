<?php

namespace App\Http\Livewire\Admin\RunySlider;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use RunySliderB4\Models\RunySliderB4;
use RunySliderB4\Models\RunySliderPics;

class SliderEdit extends Component
{
    public $slider_id, $name, $slug;

    protected $listeners = [
        'add_pic_to_slide' => 'render'
    ];

    protected $rules = [
        'name' => 'required|main:3',
        'slug' => 'required|main:3'
    ];

    protected $messages = [
        'name.required' => 'نام لازم هست',
        'slug.required' => 'بارگذاری فایل لازم هست',
    ];

    public function mount()
    {
        $slider = RunySliderB4::query()->find($this->slider_id);
        //dd($this->slider_id , $slider);
        $this->name = $slider->name;
        $this->slug = $slider->slug;
    }

    public function render()
    {
        $pics = RunySliderPics::query()->where('runy_slider_id', $this->slider_id)->get();
        return view('livewire.admin.runy-slider.slider-edit', compact('pics'));
    }

    public function slug_slider($slug)
    {
        $arrySlug = explode(" ", $slug);
        $slug = implode("-", $arrySlug);
        $is_slug = RunySliderB4::query()->where('slug', $slug)->count();
        if ($is_slug > 0) {
            return $slug . '2';
        } else {
            return $slug;
        }
    }

    public function updated()
    {
        //dd('oo');
        if (strlen($this->name) > 1 and strlen($this->slug) > 0)
        {
            $slider = RunySliderB4::query()->find($this->slider_id);
            $slider->name = $this->name;
            $slider->slug = $this->slug_slider($this->slug);
            $slider->save();

        }elseif (strlen($this->name) > 1 and strlen($this->slug) == 0)
        {
            $slider = RunySliderB4::query()->find($this->slider_id);
            $slider->name = $this->name;
            $slider->slug = $this->slug_slider($this->name);
            $slider->save();
        }else {

        }

    }

    public function status_index()
    {
        $this->emit('status_index') ;
    }


}
