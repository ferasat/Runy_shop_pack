<?php

namespace App\Livewire\Admin\Requests;

use Employee\Models\Employee;
use Livewire\Component;

class RowRequest extends Component
{
    public $request , $employee;
    public function render()
    {
        $employees = Employee::query()->where('levelPermission' , '>' ,'2' )->get();

        return view('livewire.admin.requests.row-request' , compact('employees'));
    }

    public function save()
    {
        $this->request->sponsor_id = $this->employee ;
        $this->request->save() ;
    }
}
