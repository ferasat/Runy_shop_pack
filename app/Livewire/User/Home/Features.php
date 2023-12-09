<?php

namespace App\Livewire\User\Home;

use App\Models\OptionalSettings;
use Livewire\Component;

class Features extends Component
{
    public $features ;
    public function mount()
    {
        $this->features = OptionalSettings::query()->where([
            'type' => 'home',
            'name' => 'features'
        ])->first();
    }
    public function render()
    {
        return view('livewire.user.home.features');
    }
}
