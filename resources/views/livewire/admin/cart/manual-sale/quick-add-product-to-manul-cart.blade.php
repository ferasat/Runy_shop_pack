<div>
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="addToCartManulLabel">کالا و خدمات را جستجو و انتخاب کنید</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-12 d-flex justify-content-between py-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                    <label class="form-check-label" for="autoSizingCheck">
                        جستجو در سریال محصولات
                    </label>
                </div>
                <button class="btn btn-primary btn-sm" wire:click="switchNewProduct()">تعریف کالای جدید</button>
            </div>


            @if($addNewProductView)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">نام
                                محصول</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-lg" id="new_product_name"
                                       placeholder="نام محصول" wire:model.live="new_product_name">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <button class="btn btn-sm btn-primary" wire:click="addNewProduct()" data-bs-dismiss="modal" aria-label="Close">ذخیره</button>
                    </div>
                </div>
            @else
                <div class="col-12">
                    <label class="visually-hidden" for="productSearch">کالاوخدمات</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="productSearch" wire:model.live.blur="wordSearch"
                               wire:keydown.enter="search_products()" placeholder="حداقل سه کارکتر وارد کنید">
                        <div class="input-group-text">کالاوخدمات</div>
                    </div>
                </div>
                <div class="col-12 py-4">
                    <ul class="list-group list-group-flush">
                        @foreach($products as $product)
                            <li class="list-group-item d-flex justify-content-between"
                                wire:key="{{ $product->id }}">
                                <div class="service-name">
                                    {{ $product->name }}
                                </div>
                                <button class="btn" data-bs-dismiss="modal" aria-label="Close"
                                        wire:click.prevent="add_to_cart({{ $product->id }})">
                                    <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                           stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z"
                                                stroke="#6c429a" stroke-width="1.5"></path>
                                            <path
                                                d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z"
                                                stroke="#6c429a" stroke-width="1.5"></path>
                                            <path d="M13 13V11M13 11V9M13 11H15M13 11H11" stroke="#6c429a"
                                                  stroke-width="1.5" stroke-linecap="round"></path>
                                            <path
                                                d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7"
                                                stroke="#6c429a" stroke-width="1.5"
                                                stroke-linecap="round"></path>
                                        </g>
                                    </svg>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

</div>
