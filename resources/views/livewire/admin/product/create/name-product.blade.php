<div class="card mb-3">
    <div class="card-body mb-n2 border-last-none h-100">
        <div class="mb-3">
            <label class="form-label">عنوان</label>
            <input type="text" class="form-control" wire:model.blur="name_">
            @error('name_') {{$message}} @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">لینک</label>
            <input type="text" class="form-control" wire:model.blur="slug">

        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ asset('/product/'.$slug) }}" target="_blank" class="btn btn-icon btn-icon-end btn-tertiary active-scale-up" type="button">
                <span >دیدن محصول</span>
                <i data-cs-icon="link"></i>
            </a>
        </div>
    </div>
</div>
