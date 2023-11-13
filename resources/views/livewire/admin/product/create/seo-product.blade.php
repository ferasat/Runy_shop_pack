<div class="card mb-3 border-color-runy-primary">
    <div class="card-header border-color-runy-primary">
        <svg class="icon-svg-panel" viewBox="0 0 32 32" id="OBJECT" xmlns="http://www.w3.org/2000/svg" fill="#6c429a"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:#ea9adf;}</style></defs><title></title><rect class="cls-1" height="6.71" transform="translate(-9.7 12.91) rotate(-26.57)" width="2" x="21.5" y="23.65"></rect><rect class="cls-1" height="2" transform="translate(-18.9 23.42) rotate(-63.43)" width="6.71" x="6.15" y="26"></rect><rect class="cls-1" height="24" rx="3" ry="3" width="30" x="1" y="1"></rect><path d="M1,21v1a3,3,0,0,0,3,3H28a3,3,0,0,0,3-3V21Z"></path><path d="M27,31H5a1,1,0,0,1,0-2H27a1,1,0,0,1,0,2Z"></path><path d="M8,16H6a1,1,0,0,1,0-2H8a1,1,0,0,0,0-2A3,3,0,0,1,8,6h2a1,1,0,0,1,0,2H8a1,1,0,0,0,0,2,3,3,0,0,1,0,6Z"></path><path d="M14,16a1,1,0,0,1-1-1V7a1,1,0,0,1,2,0v8A1,1,0,0,1,14,16Z"></path><path d="M18,8H14.17a1,1,0,0,1,0-2H18a1,1,0,0,1,0,2Z"></path><path d="M18,12H14.17a1,1,0,0,1,0-2H18a1,1,0,0,1,0,2Z"></path><path d="M18,16H14.17a1,1,0,0,1,0-2H18a1,1,0,0,1,0,2Z"></path><path d="M24,16a3,3,0,0,1-3-3V9a3,3,0,0,1,6,0v4A3,3,0,0,1,24,16Zm0-8a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V9A1,1,0,0,0,24,8Z"></path></g></svg>
        سئو محصول
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="titleSeo" class="form-label">عنوان سئو</label>
            <input type="text" class="form-control" id="titleSeo" wire:model.live.blur="titleSeo" placeholder="عنوان سئو">
            @error('titleSeo')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="focusKeyword" class="form-label">کلمات کلیدی</label>
            <input type="text" class="form-control" id="focusKeyword" wire:model.live.blur="focusKeyword" placeholder="کلمات کلیدی">
            @error('focusKeyword')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="descriptionSeo" class="form-label">توضیحات متا</label>
            <textarea type="text" class="form-control" id="descriptionSeo" wire:model.live.blur="descriptionSeo" placeholder="توضیحات متا">
                {{ $descriptionSeo }}
            </textarea>
            @error('descriptionSeo')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="card-footer border-color-runy-primary">
        @if($saveStatus)
            <button class="btn btn-info" wire:click="">
                <svg class="icon-svg-panel-sm svg-loader" fill="#6c429a" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.91.28a1,1,0,0,0-.82.21,1,1,0,0,0-.36.77V5.45a1,1,0,0,0,.75,1,9.91,9.91,0,1,1-5,0,1,1,0,0,0,.75-1V1.26a1,1,0,0,0-.36-.77,1,1,0,0,0-.82-.21,16,16,0,1,0,5.82,0ZM16,30A14,14,0,0,1,12.27,2.51V4.7a11.91,11.91,0,1,0,7.46,0V2.51A14,14,0,0,1,16,30Z"></path> </g></svg>
                در حال ذخیره سازی
            </button>
        @else
            <button class="btn btn-runy-primary" wire:click="save()"> سئو را ذخیره کن</button>
        @endif

    </div>
</div>
