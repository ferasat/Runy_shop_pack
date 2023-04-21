<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\OptionalSettings;
use Livewire\Component;

class HomeSetting extends Component
{
    public $name , $name_text , $value, $autoload , $readyToLoad = false;

    public function mount()
    {

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
