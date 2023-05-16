<?php

namespace App\Http\Livewire\Admin\RunySlider;

use App\Models\Filemanager;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use RunySliderB4\Models\RunySliderPics;

class AddPic extends Component
{
    use WithFileUploads ;
    public $slider_id  , $new_name_pic , $new_file_pic , $new_link_pic, $new_text_pic;

    public function render()
    {
        return view('livewire.admin.runy-slider.add-pic');
    }

    protected $rules = [
        'new_file_pic' => 'image|max:1024|required'
    ];

    protected $messages = [
        'new_file_pic.required' => 'بارگذاری فایل لازم هست',
        'new_file_pic.max' => 'بیشتر از 1 مگ حجم دارد',
        'new_file_pic.image' => 'حتما باید عکس باشد',
    ];

    public function addNewPic()
    {
        $this->validate();

        $newPic = new RunySliderPics();
        $newPic->runy_slider_id = $this->slider_id ;
        $newPic->name = $this->new_name_pic ;
        $newPic->link = $this->new_link_pic ;
        $newPic->text = $this->new_text_pic ;
        if ($this->new_file_pic !== null){
            $newfile = new Filemanager();
            $newfile->filename = 'runy-slider-'.$this->slider_id ;
            $newfile->user_id = Auth::id() ;
            $newfile->where = 'runy-slider' ;
            $newfile->where_id = $this->slider_id ;
            $newfile->description = $this->new_name_pic ;
            $newfile->path = '/storage/picture/runy-slider/'.explode('/' , $this->new_file_pic->store('public/picture/runy-slider' ))[3];
            $newfile->save() ;

            $newPic->urlpic = $newfile->path ;
        }

        $newPic->save();

        $this->emit('add_pic_to_slide');

    }
}
