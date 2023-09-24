<div class="card mt-5">
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">عنوان سئو</label>
            <input type="text" class="form-control" wire:model.blur="titleSeo">
            @error('titleSeo') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">کلمه کانونی</label>
            <input type="text" class="form-control" wire:model.blur="focusKeyword">
            @error('focusKeyword') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label">توضیحات متا</label>
            <textarea wire:model.blur="metaDescription" class="form-control" rows="3"></textarea>
            @error('metaDescription') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

    </div>
</div>
