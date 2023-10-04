<div class="">
    <div class="card mb-3 border-runy-service">
        <div class="card-header border-runy-service">انتشار</div>
        <div class="card-body">
            <label class="visually-hidden" for="statusPublish">وضعیت انتشار</label>
            <div class="input-group">
                <div class="input-group-text border-runy-service">وضعیت انتشار</div>
                <select id="statusPublish" wire:model.live.blur="statusPublish" class="form-select border-runy-service" aria-hidden="true">
                    <option value="forCheck">برای بررسی</option>
                    <option value="draft">پیش نویس</option>
                    <option value="publish">انتشار</option>
                </select>
            </div>
        </div>
        <div class="card-body">
            <label class="visually-hidden" for="specialPin">پین شود</label>
            <div class="input-group">
                <div class="input-group-text border-runy-service">پین شود</div>
                <select id="statusPublish" wire:model.live.blur="specialPin" class="form-select border-runy-service" aria-hidden="true">
                    <option value="1">بله</option>
                    <option value="0">خیر</option>
                </select>
            </div>
        </div>
        <div class="card-footer text-center border-runy-service">
            <button class="btn btn-runy-primary mb-1 ">ذخیره</button>
        </div>
    </div>


</div>
