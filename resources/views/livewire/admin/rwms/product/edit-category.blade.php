<div class="card mb-3">
    <div class="card-header d-flex justify-content-between">
        <span>{{ $cat->name }}</span>
        @if($editStatus)
            <button class="btn btn-outline-warning" wire:click="save()">ذخیره</button>
        @else
            <button class="btn btn-outline-warning" wire:click="changeBtn()">ویرایش</button>
        @endif
    </div>

    @if($editStatus)
    <div class="card-body row">
        <div class="col-md-6">
            <label for="name" class="form-label">نام</label>
            <input type="text" class="form-control" id="name" wire:model="name">
        </div>
    </div>
    @endif
</div>
