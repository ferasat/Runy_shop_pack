<div class="">
    <div class="card">
        <div class="card-header">انتشار</div>
        <div class="card-body">
            <label class="visually-hidden" for="autoSizingInputGroup">وضعیت انتشار</label>
            <div class="input-group">
                <div class="input-group-text">وضعیت انتشار</div>
                <select id="statusPublish" wire:model.live.blur="statusPublish" class="form-select" aria-hidden="true">
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
                <select id="statusPublish" wire:model.live.blur="specialPin" class="form-select" aria-hidden="true">
                    <option value="1">بله</option>
                    <option value="0">خیر</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary mb-1 active-scale-up">ذخیره</button>
        </div>
    </div>


</div>
