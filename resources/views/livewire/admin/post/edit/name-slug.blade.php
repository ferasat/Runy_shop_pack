<div class="card ">
    <div class="card-header">عنوان</div>
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="form-label">عنوان</label>
            <input type="text" class="form-control" wire:model.live.blur="name" name="name">
            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">نامک</label>
            <input type="text" class="form-control" wire:model.live.blur="slug" name="slug">
            @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="py-3 text-left">
            <a target="_blank" href="{{ asset('post/'.$post->slug) }}" class="btn btn-info">دیدن پست</a>
        </div>
    </div>
</div>
