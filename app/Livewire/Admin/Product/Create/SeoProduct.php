<?php

namespace App\Livewire\Admin\Product\Create;

use Livewire\Component;
use Product\Models\Product;

class SeoProduct extends Component
{
    public $product , $titleSeo, $focusKeyword, $descriptionSeo ;

    public function mount()
    {
        //dd($this->product , $this->titleSeo);
        $this->titleSeo = $this->product->titleSeo ;
        $this->focusKeyword = $this->product->focusKeyword ;
        $this->descriptionSeo = $this->product->descriptionSeo ;
    }
    public function render()
    {
        return view('livewire.admin.product.create.seo-product');
    }

    protected $rules = [
        'titleSeo' => 'min:3|max:75',
        'focusKeyword' => 'min:3|max:254',
        'descriptionSeo' => 'min:3|max:254'
    ];
    protected $messages = [
        'titleSeo.min' => 'بیش از سه نویسه وارد کنید',
        'titleSeo.max' => 'کمتر از 75 نویسه وارد کنید',
        'focusKeyword.min' => 'بیش از سه نویسه وارد کنید',
        'focusKeyword.max' => 'کمتر از 254 نویسه وارد کنید',
        'descriptionSeo.min' => 'بیش از سه نویسه وارد کنید',
        'descriptionSeo.max' => 'کمتر از 254 نویسه وارد کنید',
    ];

    public function updated()
    {
        $this->validate();

        $this->product->descriptionSeo = $this->descriptionSeo ;
        $this->product->titleSeo = $this->titleSeo ;
        $this->product->focusKeyword = $this->focusKeyword ;
        $this->product->save();
    }
}
