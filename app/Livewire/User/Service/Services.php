<?php

namespace App\Livewire\User\Service;

use Livewire\Component;
use Livewire\WithPagination;
use Product\Models\Product;

class Services extends Component
{
    use WithPagination;

    public $breadcrumbs, $keyword, $searchStatus = false;

    public function mount()
    {

    }

    public function render()
    {
        if ($this->searchStatus)
            return view('livewire.user.service.services', [
                'services' => Product::query()->where([
                    'statusPublish' => 'publish',
                    'formatProduct' => 'service'
                ])->where('name', 'LIKE', '%' . $this->keyword . "%")
                    ->orderByDesc('id')->paginate(20),
            ]);
        else return view('livewire.user.service.services', [
            'services' => Product::query()->where([
                'statusPublish' => 'publish',
                'formatProduct' => 'service'
            ])->orderByDesc('id')->paginate(20),
        ]);
    }

    public function search()
    {
        if (strlen($this->keyword) > 1){
            $this->searchStatus = true;
            $this->render();
        } else {
            $this->searchStatus = false;
            $this->render();
        }

    }
}
