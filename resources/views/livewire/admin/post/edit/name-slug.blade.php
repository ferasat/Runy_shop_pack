<div class="card ">
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="form-label">عنوان</label>
            <input type="text" class="form-control" wire:model.blur="name" name="name">
            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">نامک</label>
            <input type="text" class="form-control" wire:model.blur="slug" name="slug">
            @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

    </div>
</div>
