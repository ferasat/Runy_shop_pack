<?php

namespace App\Livewire\Admin\Requests\Department;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Rqsts\Models\RequestDepartment;

class IndexDepartment extends Component
{
    public $name , $description , $master=1 , $sub_department_id , $disableBtn = false ;
    public function render()
    {
        $departments = RequestDepartment::query()->orderByDesc('id')->get();
        return view('livewire.admin.requests.department.index-department' , compact('departments'));
    }

    protected $rules = [
        'name' => 'required|max:58',
    ];

    protected $messages = [
        'name.required' => 'نام لازم هست',
        'name.max' => 'واژه ها بیش از حد هستند . حداکثر 58 واژه باید باشد',
    ];

    public function save()
    {
        $this->disableBtn = true ;
        $this->validate([
            'name'=> 'required'
        ]);

        $newCat = new RequestDepartment();
        $newCat->name = $this->name ;
        $newCat->description = $this->description ;
        $newCat->master = $this->master ;
        $newCat->user_id = Auth::id() ;
        $newCat->save();



        $this->render() ;
        $this->disableBtn = false ;
    }


    public function deleteCat($dep_id)
    {
        $this->disableBtn = true ;
        RequestDepartment::query()->find($dep_id)->delete();

        $this->render() ;
        $this->disableBtn = false ;
    }
}
