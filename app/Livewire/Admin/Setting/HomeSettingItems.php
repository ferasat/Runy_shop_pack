<?php

namespace App\Livewire\Admin\Setting;

use App\Models\OptionalSettings;
use Livewire\Component;

class HomeSettingItems extends Component
{
    public $setting , $autoload;

    public function mount()
    {
        $this->autoload = $this->setting->autoload;
        $this->name = $this->setting->name;
        $this->name_text = $this->setting->name_text;
        $this->value = $this->setting->value;
    }

    public function render()
    {
        return view('livewire.admin.setting.home-setting-items');
    }

    protected $rules =[
        'name' => 'required|min:3',
        'name_text' => 'required|min:3',
        'value' => 'required',
        'autoload' => 'required|boolean',
    ];

    protected $messages = [
        'name.required' => 'نامک به انگلیسی لازم هست',
        'name_text.required' => 'نام به فارسی لازم هست',
        'value.required' => 'مقدار تنظیم را وارد کنید',
    ];

    public function updated()
    {

    }


    public function save()
    {
        $this->validate();
        $upOp = OptionalSettings::query()->findOrFail($this->setting->id);
        $upOp->autoload = $this->autoload ;
        $upOp->name = $this->name ;
        $upOp->name_text = $this->name_text ;
        $upOp->value = $this->value ;
        $upOp->save() ;
        //dd($upOp->name, $this->name , $upOp->name_text ,$this->name_text , $upOp->value );
    }
}
