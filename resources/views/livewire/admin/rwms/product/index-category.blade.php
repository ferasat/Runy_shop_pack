<div class="container pt-5">

    <div class="row">
        <div class="col-12 py-3">
            <h3>مدیریت دستبندی محصولات انبار</h3>
        </div>
        <div class="col-xl-4 mb-5">
            <div class="card ">
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">عنوان</label>
                        <input type="text" class="form-control" wire:model.live.blur="name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <button wire:click.prevent="add_cat()" class="btn btn-primary">ذخیره</button>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-xl-8 mb-5">
            @foreach($cats as $cat)
                @livewire('admin.rwms.product.edit-category' , ['cat'=>$cat] , key($cat->id.rand(1,99)))
            @endforeach
        </div>
    </div>
</div>
