<div class="col-12 col-lg-12 mb-5">
    <div class="card">
        <div class="card-header">تنظیمات عمومی</div>
        <div class="card-body row">
            <div class="col-md-4 py-2">
                <label for="site_name" class="form-label">نام سایت</label>
                <input type="text" class="form-control" id="site_name" wire:model.blur="site_name">
            </div>
            <div class="col-md-4 py-2">
                <label for="site_short_description" class="form-label">شعار سایت</label>
                <input type="text" class="form-control" id="site_short_description" wire:model.blur="site_short_description">
            </div>
            <div class="col-md-4 py-2">
                <label for="site_url" class="form-label">آدرس سایت</label>
                <input type="text" class="form-control text-lg-start " dir="ltr" id="site_url" wire:model.blur="site_url">
            </div>
            <div class="col-md-4 py-2">
                <label for="site_url" class="form-label">آیا SSL دارید؟</label>
                <select class="form-control text-lg-start " dir="rtl" wire:model.blur="have_ssl">
                    <option value="1">بله</option>
                    <option value="0">نه</option>
                </select>
            </div>
            <div class="col-md-4 py-2">
                <label for="site_url" class="form-label">آدرس پیشخوان</label>
                <input type="text" class="form-control text-lg-start " dir="ltr" id="dash_url" wire:model.blur="dash_url">
            </div>
            <div class="col-md-4 py-2">
                <label for="office_phone" class="form-label">تلفن دفتر</label>
                <input type="text" class="form-control" id="office_phone" wire:model.blur="office_phone">
            </div>
            <div class="col-md-4 py-2">
                <label for="mobile_phone" class="form-label">شماره همراه</label>
                <input type="text" class="form-control" id="mobile_phone" wire:model.blur="mobile_phone">
            </div>
        </div>
        <div class="card-footer text-center">
            <button class="btn btn-primary" type="button" wire:click.privent="save()" @if($disableBTN) disabled @endif >ذخیره</button><br>
            @if($showMessage)
            <div class="alert alert-success">ذخیره شد</div>
            @endif
        </div>
    </div>
</div>
