<?php

namespace App\Livewire\Admin\RunySliderB5;

use FilesManager\Models\FileManager;
use http\Client;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;


class EditSlidePic extends Component
{
    use WithFileUploads;

    #[Rule('image|max:2048')] // 2MB Max
    public $previewPic=null ;

    public $pic , $name , $text , $link , $msgSuc=false ;

    public function mount()
    {
        $this->name = $this->pic->name ;
        $this->text = $this->pic->text ;
        $this->link = $this->pic->link ;
    }

    public function render()
    {
        return view('livewire.admin.runy-slider-b5.edit-slide-pic');
    }

    public function deletePic()
    {
        $this->pic->delete();
        $this->dispatch('pic-delete');
    }

    public function updated()
    {
        $this->msgSuc = false ;
    }

    public function save()
    {
         //dd($this->previewPic);

        $this->pic->name = $this->name ;
        $this->pic->text = $this->text ;
        $this->pic->link = $this->link ;

        if ($this->previewPic) {

            $file = $this->previewPic;
            $filename = 'slide_'.$file->getClientOriginalName();
            // ذخیره فایل
            //$this->pic->urlpic = Image::make($file)->resize(100, 100)->save('uploads/slides/' . $filename);
            Image::make($file)->save('uploads/slides/' . $filename);
            $this->pic->urlpic = 'uploads/slides/' . $filename;

            $newFile = new FileManager();
            $newFile->filename = $filename ;
            $newFile->where = 'runy-slider' ;
            $newFile->where_id = $this->pic->runy_slider_id ;
            $newFile->path = $this->pic->urlpic ;
            $newFile->description = $this->text ;
            $newFile->size = $file->getSize();
            $newFile->extension = $file->getClientOriginalExtension() ;
            $newFile->save();

        }

       /* $size = $file->getSize();
        $extension = $file->getClientOriginalExtension();*/



        $this->pic->save() ;

        $this->msgSuc = true ;

    }
}
