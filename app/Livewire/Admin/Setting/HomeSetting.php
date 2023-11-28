<?php

namespace App\Livewire\Admin\Setting;

use App\Models\OptionalSettings;
use HomePage\HomePage;
use Livewire\Component;
use RunySliderB5\Models\RunySliderB5;

class HomeSetting extends Component
{
    public $name , $name_text , $value, $autoload , $readyToLoad = false , $slideshow_id , $loadingBox=false , $homePage ;
    public $slides ;

    public function mount()
    {
        $this->homePage = HomePage::query()->first();
        $this->slides = RunySliderB5::all();
        $this->slideshow_id = $this->homePage->slideshow_id ;
    }

    public function loadItems()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        //$settings = OptionalSettings::query()->where('type' , 'home')->get();
        return view('livewire.admin.setting.home-setting' , ['settings'=>$this->readyToLoad ? OptionalSettings::query()->where('type' , 'home')->get() : [],]);
    }

    public function updatedSlideshowId()
    {
        $this->loadingBox = true ;
        $slidesId = [];
        foreach ($this->slides as $slide){
            $slidesId[]=$slide->id ;
        }

        if (in_array($this->slideshow_id , $slidesId)){
            $this->homePage->slideshow_id = $this->slideshow_id ;
            $this->homePage->save() ;
        }else{
            $this->slideshow_id = $this->homePage->slideshow_id ;
            session()->flash('status', 'این شناسه وجود ندارد');
        }

        $this->loadingBox = false ;
    }

    protected $rules =[
        'name' => 'required|min:3',
        'name_text' => 'required|min:3',
        'value' => 'required',
    ];

    protected $messages = [
        'name.required' => 'نامک به انگلیسی لازم هست',
        'name_text.required' => 'نام به فارسی لازم هست',
        'value.required' => 'مقدار تنظیم را وارد کنید',
    ];




    public function save()
    {
        //dd('dd');
        $this->validate();

        $newSet = new OptionalSettings();
        $newSet->name = $this->name ;
        $newSet->name_text = $this->name_text ;
        $newSet->value = $this->value ;
        $newSet->type = 'home' ;
        $newSet->save();

        $this->render();
//        $this->redirect(route('setting.index'));
    }

}
