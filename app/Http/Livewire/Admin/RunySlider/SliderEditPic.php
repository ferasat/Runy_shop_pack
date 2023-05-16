<?php

namespace App\Http\Livewire\Admin\RunySlider;

use App\Models\Filemanager;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use RunySliderB4\Models\RunySliderPics;

class SliderEditPic extends Component
{
    use WithFileUploads ;

    public $pic , $name , $link , $urlpic , $text , $new_pic ;

    public function mount()
    {
        $this->name= $this->pic->name ;
        $this->link= $this->pic->link ;
        $this->urlpic= $this->pic->urlpic ;
        $this->text= $this->pic->text ;
    }

    public function render()
    {
        return view('livewire.admin.runy-slider.slider-edit-pic');
    }

    public function save($pic_id)
    {
        $upPic = RunySliderPics::query()->find($pic_id);
        $upPic->name = $this->name ;
        $upPic->link = $this->link ;
        $upPic->text = $this->text ;
        if ($this->new_pic !== null){
            $newfile = new Filemanager();
            $newfile->filename = 'runy-slider-'.$this->pic->runy_slider_id ;
            $newfile->user_id = Auth::id() ;
            $newfile->where = 'runy-slider' ;
            $newfile->where_id = $this->pic->runy_slider_id ;
            $newfile->description = $this->name ;
            $newfile->path = '/storage/picture/runy-slider/'.explode('/' , $this->new_pic->store('public/picture/runy-slider' ))[3];
            $newfile->save() ;

            $upPic->urlpic = $newfile->path ;
        }

        $upPic->save();
    }

    public function delete($pic_id)
    {
        RunySliderPics::query()->find($pic_id)->delete();
        $this->emit('add_pic_to_slide') ;
    }
}
