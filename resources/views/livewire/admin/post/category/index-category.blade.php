<div class="">

    <div class="row">
        <div class="col-xl-4 mb-5">
            <div class="card ">
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">عنوان</label>
                        <input type="text" class="form-control" wire:model.live.blur="name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">نامک</label>
                        <input type="text" class="form-control" wire:model.live.blur="slug">
                        @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                </div>
            </div>
            <div class="card mt-5">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">عنوان سئو</label>
                        <input type="text" class="form-control" wire:model.live.blur="titleSeo">
                        @error('titleSeo') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">کلمه کانونی</label>
                        <input type="text" class="form-control" wire:model.live.blur="focusKeyword">
                        @error('focusKeyword') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-outline-success w-75" wire:click.privent="save()"
                                @if($disableBtn) disabled @endif>ذخیره
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-8 mb-5">
            @foreach($cats as $cat)
                @livewire('admin.post.category.item-cat' , ['cat'=>$cat] , key($cat->id.rand(1,999)))
            @endforeach
        </div>
    </div>
</div>
