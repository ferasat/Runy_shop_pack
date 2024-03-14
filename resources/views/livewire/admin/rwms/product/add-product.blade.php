<div class="row text-right">
    <div class="card mb-3 shadow-sm">
        <div class="card-body row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">نام محصول <span
                            class="smaller-Text badge bg-danger rounded">لازم</span></label>
                    <input list="names" type="text" class="form-control" id="name" wire:model="name"
                           placeholder="حداقل سه حرف وارد کنید">
                    <datalist id="names">
                        @foreach($names as $name)
                            <option value="{{ $name->name }}">
                        @endforeach
                    </datalist>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="category" class="form-label">دستبندی محصول</label>
                    <select class="form-control" id="category" wire:model="category_id">
                        @foreach($cats as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 shadow-sm">
        <div class="card-body row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="price" class="form-label">قیمت محصول</label>
                    <input type="number" class="form-control" id="price" wire:model.live.blur="price"
                           placeholder="1000">
                    <div class="text-left">{{ number_format($price) }} تومان</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="source" class="form-label">تامین کننده</label>
                    <input type="text" class="form-control" id="source" wire:model="source" placeholder="اختیاری">

                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="input_stock" class="form-label">مقدار یا تعداد محصول</label>
                    <input type="number" class="form-control" id="input_stock" wire:model="input_stock" placeholder="0">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="unit" class="form-label">واحد سنجش</label>
                    <select class="form-control" id="unit" wire:model="unit">
                        <option value="کیلوگرم">کیلوگرم</option>
                        <option value="گرم">گرم</option>
                        <option value="متر">متر</option>
                        <option value="سانتی متر">سانتی متر</option>
                        <option value="عدد">عدد</option>
                        <option value="لیتر">لیتر</option>
                        <option value="بسته">بسته</option>
                    </select>
                </div>
            </div>

        </div>
    </div>

    <div class="card mb-3 shadow-sm">
        <div class="card-body row">

            <div class="col-md-4">
                <div class="mb-3">
                    <label for="wm_id" class="form-label">انبار محصول</label>
                    <select class="form-control" id="wm_id" wire:model="wm_id">
                        @foreach($wms as $wm)
                            <option value="{{ $wm->id }}">{{ $wm->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-8 row">

                <div class="col-md-8">
                    <label for="pic" class="form-label">تصویر محصول</label>
                    <input type="file" class="form-control" id="pic" wire:model="pic">
                </div>
                <div class="col-md-4 text-left">
                    @error('pic') <span class="error">{{ $message }}</span> @enderror
                    <div wire:loading wire:target="photo">Uploading...</div>
                    @if ($pic)
                        <img class="w-100px" src="{{ $pic->temporaryUrl() }}">
                    @endif
                </div>

            </div>
        </div>
    </div>


    <div class="mb-3">
        <label for="texts" class="form-label">توضیحات محصول</label>
        <textarea class="form-control" id="texts" wire:model="texts" placeholder="اختیاری"></textarea>
    </div>
    <div class="mt-3">
        <button class="btn btn-primary" wire:click.prevent="addProduct()">
            ذخیره
            <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" id="_003_ECOMMERCE_03" data-name="003_ECOMMERCE_03"
                 xmlns="http://www.w3.org/2000/svg" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier"><title>003_085</title>
                    <path
                        d="M11,21H4a.99974.99974,0,0,1-1-1V4A.99974.99974,0,0,1,4,3H20a.99974.99974,0,0,1,1,1v7a1,1,0,0,1-2,0V5H5V19h6a1,1,0,0,1,0,2Z"
                        style="fill:#fafafa"></path>
                    <polygon points="10 4 10 10 12 8 14 10 14 4 10 4" style="fill:#fafafa"></polygon>
                    <path d="M17,21a.99974.99974,0,0,1-1-1V14a1,1,0,0,1,2,0v6A.99974.99974,0,0,1,17,21Z"
                          style="fill:#fafafa"></path>
                    <path d="M20,18H14a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z" style="fill:#fafafa"></path>
                </g>
            </svg>
        </button>
        <ul class="d-block list-group text-danger">
            <li class="list-group-item">@error('name') <span
                    class="error">نام تکراری نباشد . بیشتر از 3 حرف وارد کنید .</span> @enderror</li>
            <li class="list-group-item">@error('pic') <span class="error">{{ $message }}</span> @enderror</li>
        </ul>
    </div>
</div>
