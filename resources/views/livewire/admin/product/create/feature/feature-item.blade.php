<div class="row g-3 my-2" id="id_{{ $feature->id }}">
    <div class="col-sm-2">
        <input type="text" class="form-control" value="{{ $feature->name }}" disabled>
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="value">مقدار</label>
        <div class="input-group">
            <div class="input-group-text">مقدار</div>
            <input type="text" class="form-control" wire:model="value">
        </div>

    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="value">هزینه </label>
        <div class="input-group">
            <div class="input-group-text">هزینه</div>
            <input type="text" class="form-control" wire:model="add_price">
        </div>
    </div>
    <div class="col-sm-4">
        @if($statusSave)
            <input type="button" class="btn btn-info" value="ذخیره شده" >
        @else
            <input type="button" class="btn btn-runy-primary" value="ذخیره کن" wire:click="save()">
        @endif

        <input type="button" class="btn btn-danger" value="حذف" wire:click="delete()">
    </div>
</div>
