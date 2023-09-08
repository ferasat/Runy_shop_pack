<?php

namespace App\Http\Livewire\Admin\Product\Discount;

use App\Models\User;
use Livewire\Component;
use Product\Models\Product;

class EditDiscount extends Component
{
    public $discount,$products,$users,$product_id,$user_id,$code,$amount,$type,$duration,$start_date,$end_date,
    $start_time,$end_time,$capacity,$status,$showDate=false,$showTime=false;
    public function mount()
    {
        $this->showDate=true;
        $this->user_id=$this->discount->user_id;
        $this->code=$this->discount->code;
        $this->type=$this->discount->type;
        $this->amount=$this->discount->amount;
        $this->duration=$this->discount->duration;
        $this->start_date=$this->discount->start_date;
        $this->end_date=$this->discount->end_date;
        $this->start_time=$this->discount->start_time;
        $this->end_time=$this->discount->end_time;
        $this->capacity=$this->discount->capacity;
        $this->users=User::all();
    }
    public function render()
    {
        return view('livewire.admin.product.discount.edit-discount');
    }
    public function updatedDuration()
    {
        if ($this->duration=='date')
        {
            $this->showDate=true;
            $this->showTime=false;

        }elseif ($this->duration=='time')
        {
            $this->showTime=true;
            $this->showDate=false;
        }
    }

    public function save()
    {
        $this->discount->product_id=$this->product_id;
        $this->discount->user_id=$this->user_id;
        $this->discount->code=$this->code;
        $this->discount->amount=$this->amount;
        $this->discount->type=$this->type;
        $this->discount->duration=$this->duration;
        if ($this->duration=='date'){
            $this->discount->start_date=$this->start_date;
            $this->discount->end_date=$this->end_date;
        }else{
            $this->discount->start_time=$this->start_time;
            $this->discount->end_time=$this->end_time;
        }

        $this->discount->capacity=$this->capacity;
        $this->discount->save();

        return $this->redirect(route('discount.index'));
    }
}
