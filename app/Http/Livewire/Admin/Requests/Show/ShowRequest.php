<?php

namespace App\Http\Livewire\Admin\Requests\Show;

use Employee\Models\Employee;
use Livewire\Component;
use Rqsts\Models\SubRequest;

class ShowRequest extends Component
{
    public $rqst , $employees , $status, $sponsor_id , $texts , $contentIsVisible=false;

    public function mount()
    {
        $this->employees = Employee::query()->where('levelPermission' , '>' , 1)->get();
        $this->status = $this->rqst->status ;
        $this->sponsor_id = $this->rqst->sponsor_id ;
    }
    public function render()
    {
        $sub_replays = SubRequest::query()->where('rqsts_id' , $this->rqst->id)->orderByDesc('id')->get();
        $countRp = $sub_replays->count();

        //dd($this->rqst->files);

        return view('livewire.admin.requests.show.show-request' , compact('sub_replays' , 'countRp'));
    }

    public function updated()
    {
        $this->rqst->status = $this->status ;
        $this->rqst->save();
    }

    public function toggleContent()
    {
        $this->contentIsVisible = !$this->contentIsVisible ;
    }

    public function save()
    {
        dd($this->texts);
    }
}
