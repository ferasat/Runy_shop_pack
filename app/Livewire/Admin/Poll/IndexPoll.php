<?php

namespace App\Livewire\Admin\Poll;

use Livewire\Component;
use Livewire\WithPagination;
use Poll\Models\Poll;


class IndexPoll extends Component
{
    use WithPagination ;
    protected $polls;
    protected $listeners =[
        'updatePolls' => 'render',
    ];
    public function mount()
    {

    }
    public function render()
    {
        $this->polls = Poll::query()->orderByDesc('id')->paginate(20);
        return view('livewire.admin.poll.index-poll' , ['polls'=>$this->polls]);
    }
}
