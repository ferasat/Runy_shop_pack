<?php

namespace App\Livewire\Admin\Setting;

use Livewire\Component;
use Sms\Models\SmsMarketing;

class SmsSetting extends Component
{
    public function render()
    {
        return view('livewire.admin.setting.sms-setting' , [
            'panels' => SmsMarketing::all(),
        ]);
    }
}
