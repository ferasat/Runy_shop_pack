<?php

namespace App\Livewire\Admin\Requests;

use Livewire\Component;
use Livewire\WithPagination;
use Rqsts\Models\Rqsts;

class IndexRequests extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $requests = Rqsts::query()->orderByDesc('id')->paginate(15);
        //dd($requests);
        return view('livewire.admin.requests.index-requests' , compact('requests'));
    }
}
