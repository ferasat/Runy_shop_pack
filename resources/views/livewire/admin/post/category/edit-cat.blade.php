<div>
    <div class="card-header d-flex justify-content-between">
        <span>{{ $cat->name }}</span>
        <button class="btn btn-outline-warning" wire:click="save()">ذخیره</button>
    </div>

    <div class="card-body row">
        <div class="col-md-6">
            <label for="name" class="form-label">نام</label>
            <input type="text" class="form-control" id="name" wire:model="name">
        </div>
        <div class="col-md-6">
            <label for="slug" class="form-label">نامک</label>
            <input type="text" class="form-control" id="slug" wire:model="slug">
        </div>
        <div class="col-12">
            <label for="name" class="form-label">توضیحات</label>
            <textarea type="text" class="form-control" id="description" wire:model="description">{!! $cat->description !!}</textarea>
        </div>
    </div>
</div>
