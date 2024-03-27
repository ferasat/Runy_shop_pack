<div class="card mb-3">
    <div class="card-header d-flex justify-content-between">
        <span>تنظیمات سامانه پیامک {{ $panel->name_panel }}</span>
        <button class="btn @if($btnDefaultTrue) btn-success @else btn-outline-warning @endif" wire:click.prevent="changePin({{ $panel->pin }})">
            @if($btnDefaultTrue)
                پیش فرض استفاده
            @else
                پیش فرض نیست
            @endif
        </button>
    </div>
    <div class="row card-body">
        <div class="col-md-6 mb-3">
            <label for="token" class="form-label">توکن یا کلید API</label>
            <input type="text" class="form-control text-left" id="token" wire:model="token" dir="ltr">
        </div>
        <div class="col-md-6 mb-3">
            <label for="api_url" class="form-label">ادرس  API</label>
            <input type="text" class="form-control text-left" id="api_url" wire:model="api_url" dir="ltr">
        </div>
        <div class="col-md-6 mb-3">
            <label for="username" class="form-label">نام کاربری</label>
            <input type="text" class="form-control text-left" id="username" wire:model="username">
        </div>
        <div class="col-md-6 mb-3">
            <label for="password" class="form-label">رمز</label>
            <input type="text" class="form-control text-left" id="password" wire:model="password">
        </div>

        <div class="col-md-3 mb-3">
            <label for="sender_number_service_1" class="form-label">شماره خدماتی 1</label>
            <input type="text" class="form-control text-left" id="sender_number_service_1" wire:model="sender_number_service_1">
        </div>
        <div class="col-md-3 mb-3">
            <label for="sender_number_service_2" class="form-label">شماره خدماتی 2</label>
            <input type="text" class="form-control text-left" id="sender_number_service_2" wire:model="sender_number_service_2">
        </div>
        <div class="col-md-3 mb-3">
            <label for="sender_number_service_3" class="form-label">شماره خدماتی 3</label>
            <input type="text" class="form-control text-left" id="sender_number_service_3" wire:model="sender_number_service_3">
        </div>
        <div class="col-md-3 mb-3">
            <label for="sender_number_service_4" class="form-label">شماره خدماتی 4</label>
            <input type="text" class="form-control text-left" id="sender_number_service_4" wire:model="sender_number_service_4">
        </div>

        <div class="col-md-3 mb-3">
            <label for="sender_number_ads_1" class="form-label">شماره تبلیغاتی 1</label>
            <input type="text" class="form-control text-left" id="sender_number_ads_1" wire:model="sender_number_ads_1">
        </div>
        <div class="col-md-3 mb-3">
            <label for="sender_number_ads_2" class="form-label">شماره تبلیغاتی 2</label>
            <input type="text" class="form-control text-left" id="sender_number_ads_2" wire:model="sender_number_ads_2">
        </div>
        <div class="col-md-3 mb-3">
            <label for="sender_number_ads_3" class="form-label">شماره تبلیغاتی 3</label>
            <input type="text" class="form-control text-left" id="sender_number_ads_3" wire:model="sender_number_ads_3">
        </div>
        <div class="col-md-3 mb-3">
            <label for="sender_number_ads_4" class="form-label">شماره تبلیغاتی 4</label>
            <input type="text" class="form-control text-left" id="sender_number_ads_4" wire:model="sender_number_ads_4">
        </div>
    </div>
    <div class="card-footer text-left">
        <button class="btn btn-outline-primary" wire:click.prevent="save()">ذخیره</button>
    </div>
</div>
