<?php

namespace App\Livewire\Admin\Poll\Temp;

use Livewire\Component;
use Livewire\WithPagination;
use Poll\Models\PollTemplate;

class IndexPollTemp extends Component
{
    use WithPagination;

    public $titlePage;

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.admin.poll.temp.index-poll-temp',
            [
                'poll_temps' => PollTemplate::query()->orderByDesc('id')->paginate(10),
            ]
        );
    }
}
