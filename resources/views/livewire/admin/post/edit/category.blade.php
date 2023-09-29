<div class="card mt-2">
    <div class="card-header">دستبندی</div>
    <div class="card-body">

        <label for="inputState" class="form-label">دستبندی را انتخاب کنید</label>
        <select id="inputState" class="form-select" wire:model.live.blur="cat_id">
            <option value="0">دستبندی نشده</option>
            @foreach($cats as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>

    </div>
</div>
