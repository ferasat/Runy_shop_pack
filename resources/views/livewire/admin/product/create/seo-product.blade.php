<div class="card mb-3">
    <div class="card-header">سئو محصول</div>
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
</div>
