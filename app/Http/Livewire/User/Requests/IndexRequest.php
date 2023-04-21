<?php

namespace App\Http\Livewire\User\Requests;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Rqsts\Models\Rqsts;

class IndexRequest extends Component
{

    public function render()
    {
        $requests = Rqsts::query()->where('user_id' , Auth::id())->orWhere('for_id' , Auth::id())->orderByDesc('id')->paginate(20);
        return view('livewire.user.requests.index-request' , compact('requests'));
    }
}
