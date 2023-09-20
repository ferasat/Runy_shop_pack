<div class="">
    <div class="card">
        <div class="card-header">انتشار</div>
        <div class="card-body">
            <label class="visually-hidden" for="autoSizingInputGroup">وضعیت انتشار</label>
            <div class="input-group">
                <div class="input-group-text">وضعیت انتشار</div>
                <select id="statusPublish" wire:model.lazy="statusPublish" class="form-select" aria-hidden="true">
                    <option value="forCheck">برای بررسی</option>
                    <option value="draft">پیش نویس</option>
                    <option value="publish">انتشار</option>
                </select>
            </div>
        </div>
        <div class="card-body">
            <label class="visually-hidden" for="autoSizingInputGroup">پین شود</label>
            <div class="input-group">
                <div class="input-group-text">پین شود</div>
                <select id="statusPublish" wire:model.lazy="specialPin" class="form-select" aria-hidden="true">
                    <option value="1">بله</option>
                    <option value="0">خیر</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary mb-1 active-scale-up">ذخیره</button>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <div class="mb-3 position-relative form-group">
                <label class="form-label">دستبندی</label>
                @foreach($categories as $cat)
                    <div class="form-check">
                        <input class="form-check-input" @if(isOrNot_pro($cat->id , $product->id)) checked
                               @endif type="checkbox" name="ch_{{$cat->id}}" value="{{$cat->id}}" id="ch_{{$cat->id}}">
                        <label class="form-check-label" for="ch_{{$cat->id}}">{{$cat->name}}</label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
