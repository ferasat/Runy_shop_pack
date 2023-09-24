<?php

namespace App\Livewire\Admin\SendMessages;

use App\Models\SendMessages;
use Livewire\Component;

class IndexSendMessages extends Component
{
    public $products,$customers,$messages;
    public function mount()
    {
        $this->messages=SendMessages::all();
    }
    public function render()
    {
        return view('livewire.admin.send-messages.index-send-messages');
    }
}
