<?php

namespace App\Livewire\Admin\SendMessages;

use Livewire\Component;

class RowSendMessages extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.admin.send-messages.row-send-messages');
    }
}
