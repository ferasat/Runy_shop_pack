<?php

namespace App\Http\Livewire\Admin\Product\Create;

use Livewire\Component;
use Livewire\WithFileUploads;
use Product\Models\Product;

class UploadPicture extends Component
{
    use WithFileUploads;
    public $product , $picture ;

    public function mount(){
        $this->picture = $this->product->pic ;
    }
    public function render()
    {
        return view('livewire.admin.product.create.upload-picture');
    }

    public function uploadPicPost()
    {
        $year = now()->year;
        $month = now()->month;
        $day = now()->day;

        $dir = "pic-product/$year/$month/$day";
        $nameFile = rand('1' , '9999').'-'.$this->picture->getClientOriginalName();

        $this->picture->storeAs($dir , $nameFile);

        return "$dir/$nameFile" ;
    }

    public function updated()
    {
        $pro = Product::find($this->product->id);
        $pro->pic = $this->uploadPicPost();
        $pro->save();
    }
}
