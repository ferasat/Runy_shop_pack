<?php

namespace App\Livewire\User\Product\Category;

use App\Models\Taxonomy;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Product\Models\CategoryProduct;
use Product\Models\Product;

class ShowCat extends Component
{
    public $cat , $breadcrumbs;
    protected $taxs ;
    #[Url]
    public $search = '';

    public function mount()
    {
        $this->loadProducts();
    }
    public function render()
    {
        if ($this->statusBrands == true){

        }else {
            $this->taxs = Taxonomy::query()->where([
                'type' => 'product',
                'item' => 'cat',
                'item_id' => $this->cat->id,
                'is' => '1',
            ])->paginate(18);
        }


        return view('livewire.user.product.category.show-cat' , ['taxs' => $this->taxs ]);
    }

    public function loadProducts()
    {
        if (strlen($this->search) > 1){
            $this->products = Product::query()->where([
                'statusPublish' => 'publish',
                'formatProduct' => 'normal',
            ])->where('name' , 'LIKE', '%' . $this->search . "%")->orderByDesc('id')->paginate(21);
        }else{
            $this->products = Product::query()->where([
                'statusPublish' => 'publish',
                'formatProduct' => 'normal',
            ])->orderByDesc('id')->paginate(21);
        }
        $this->statusBrands = false ;

    }

    #[On('select-brands')]
    public function updateProductList($brands)
    {
        $this->statusBrands = true ;
        if (count($brands) > 0) {
            foreach ($brands as $brand_id) {
                $this->taxs = Taxonomy::query()->where([
                    'type' => 'product',
                    'item' => 'cat',
                    'is' => 1,
                    'item_id' => $brand_id
                ])->paginate(18);

            }

            $this->search ='';
            $this->render();

        } else {

            $this->search ='';
        }

    }

    public function searchBtn()
    {
        if (strlen($this->search) > 1){
            return $this->redirect('/shop?search='.$this->search);
        }
    }
}
