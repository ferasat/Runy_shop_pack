<?php

namespace App\Livewire\User\Product;

use App\Models\Taxonomy;
use Livewire\Component;
use Livewire\WithPagination;
use Product\Models\CategoryProduct;
use Product\Models\Product;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;

class Shop extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $breadcrumbs, $catsProduct;
    #[Url]
    public $search = '';
    protected $products;

    public function mount()
    {
        $this->catsProduct = CategoryProduct::all();
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


    }

    public function render()
    {
        return view('livewire.user.product.shop', [
            'products' => $this->products,
        ]);
    }

    #[On('select-brands')]
    public function updateProductList($brands)
    {
        if (count($brands) > 0) {
            $products_ids = [];
            foreach ($brands as $brand_id) {
                $taxs = Taxonomy::query()->where([
                    'type' => 'product',
                    'item' => 'cat',
                    'is' => 1,
                    'item_id' => $brand_id
                ])->get();
                foreach ($taxs as $tax) {
                    $products_ids[] = $tax->type_id;
                }
            }

            $this->products = Product::query()->whereIn('id', $products_ids)->orderByDesc('id')->paginate(21);
            $this->render();

        } else {
            $this->products = Product::query()->where([
                'statusPublish' => 'publish',
                'formatProduct' => 'normal',
            ])->orderByDesc('id')->paginate(21);
        }

    }

    public function searchBtn()
    {
        if (strlen($this->search) > 1){
            $this->products = Product::query()->where([
                'statusPublish' => 'publish',
                'formatProduct' => 'normal',
            ])->where('name' , 'LIKE', '%' . $this->search . "%")->orderByDesc('id')->paginate(21);

            $this->render();
        }else{
            $this->products = Product::query()->where([
                'statusPublish' => 'publish',
                'formatProduct' => 'normal',
            ])->orderByDesc('id')->paginate(21);
        }
    }

}
