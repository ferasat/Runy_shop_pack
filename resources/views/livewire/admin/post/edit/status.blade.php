<div class="card">
    <div class="card-body">
        <label class="visually-hidden" for="autoSizingStatus">وضعیت انتشار</label>
        <div class="input-group">
            <div for="statusPublish" class="input-group-text">وضعیت انتشار</div>
            <select id="statusPublish" wire:model.live.blur="statusPublish" class="form-select"
                    aria-hidden="true">
                <option value="forCheck">برای بررسی</option>
                <option value="draft">پیش نویس</option>
                <option value="publish">انتشار</option>
            </select>
        </div>
    </div>
    <div class="card-body">
        <label class="visually-hidden" for="autoSizingStatus">نوع نوشته</label>
        <div class="input-group">
            <div for="statusPublish" class="input-group-text">نوع نوشته</div>
            <select id="statusPublish" wire:model.live.blur="typePost" class="form-select"
                    aria-hidden="true">
                <option value="post">نوشته</option>
                <option value="portfolio">نمونه کار</option>
            </select>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" type="submit">ذخیره کن</button>
    </div>
</div>
