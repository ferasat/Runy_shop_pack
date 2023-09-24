<?php

namespace App\Livewire\Admin\RunySlider;

use Livewire\Component;
use Livewire\WithPagination;
use RunySliderB4\Models\RunySliderB4;

class IndexSliders extends Component
{
    use WithPagination ;

    public $statusEdit = false , $slider_id  , $status;

    protected $queryString = ['status' , 'slider_id'];

    protected $listeners = [
        'status_index' => 'status_index'
    ];

    public function mount()
    {
        //dd($this->slider_id);
        if ($this->slider_id == null){
            $this->status == 'index' ;
        }else {
            if ($this->status == 'edit'){
                $this->status = 'edit';
                $this->statusEdit = true ;
            }
        }

    }

    public function render()
    {
        $sliders = RunySliderB4::query()->orderByDesc('id')->paginate(15);
        return view('livewire.admin.runy-slider.index-sliders' , compact('sliders'));
    }

    public function delete($slider_id)
    {
        RunySliderB4::query()->find($slider_id)->delete();
        $this->render();
    }

    public function edit($slider_id)
    {
        $this->slider_id = $slider_id ;
        $this->status = 'edit';
        $this->statusEdit = true ;
    }

    public function add_new_slider()
    {
        $newSlide = new RunySliderB4();
        $newSlide->name = 'بدون نام';
        $newSlide->save();

        $this->slider_id = $newSlide->id ;
        $this->statusEdit = true ;
    }

    public function status_index()
    {
        $this->statusEdit = false ;
    }
}
