<?php

namespace App\Livewire\User\Theme\Sidebar;

use Livewire\Component;
use Product\Models\Product;

class ServiceSidebar extends Component
{

    public function render()
    {
        return view('livewire.user.theme.sidebar.service-sidebar' , [
            'services' => Product::query()->where([
                'statusPublish'=>'publish',
                'formatProduct'=>'service'
            ])->take(5)->get(),
        ]);
    }
}
