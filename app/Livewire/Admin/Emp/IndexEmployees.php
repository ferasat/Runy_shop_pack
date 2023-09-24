<?php

namespace App\Livewire\Admin\Emp;

use App\Models\User;
use Employee\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class IndexEmployees extends Component
{
    use WithPagination ;

    public $status_page=0 , $employee;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'updateEmployees' => 'render',
        'status_edit' => 'edit_emp',
        'status_list' => 'list_emp'
    ];

    public function mount()
    {
        if (Auth::user()->levelPermission < 4) {
            return $this->redirect(route('rqsts.index'));
        }
    }
    public function render()
    {
        $employees = Employee::query()->where('levelPermission' , '>','1')->orderByDesc('id')->paginate(15);
        return view('livewire.admin.emp.index-employees' , compact('employees'));
    }

    public function edit_emp ($employee)
    {
        //dd($employee);

        $this->employee = User::query()->find($employee['id']) ;
        $this->status_page = 1 ;
    }
    public function list_emp ()
    {
        $this->render();
        $this->status_page = 0 ;
    }
}
