<?php

namespace App\Livewire\Admin\Setting;

use App\Models\OptionalSettings;
use Livewire\Component;

class ThemeSetting extends Component
{

    public function render()
    {
        $settings = OptionalSettings::query()->where('type' , 'theme')->get();
        return view('livewire.admin.setting.theme-setting' , ['settings'=>$settings]);
    }
}
