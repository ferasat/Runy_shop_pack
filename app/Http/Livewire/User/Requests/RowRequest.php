<?php

namespace App\Http\Livewire\User\Requests;

use Employee\Models\Employee;
use Livewire\Component;

class RowRequest extends Component
{
    public $request , $employee;
    public function render()
    {
        $employees = Employee::query()->where('levelPermission' , '>' ,'2' )->get();
        return view('livewire.user.requests.row-request'  , compact('employees'));
    }
}
