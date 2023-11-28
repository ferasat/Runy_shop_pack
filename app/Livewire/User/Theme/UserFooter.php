<?php

namespace App\Livewire\User\Theme;

use App\Models\OptionalSettings;
use Livewire\Component;

class UserFooter extends Component
{
    public $footer1 ,$footer2 ,$footer3 ,$footer4 ;

    public function render()
    {
        $this->footer1 = OptionalSettings::query()->where([
            'type' => 'home',
            'name' => 'footer1'
        ])->first();
        $this->footer2 = OptionalSettings::query()->where([
            'type' => 'home',
            'name' => 'footer2'
        ])->first();
        $this->footer3 = OptionalSettings::query()->where([
            'type' => 'home',
            'name' => 'footer3'
        ])->first();
        $this->footer4 = OptionalSettings::query()->where([
            'type' => 'home',
            'name' => 'footer4'
        ])->first();

        return view('livewire.user.theme.user-footer');
    }
}
