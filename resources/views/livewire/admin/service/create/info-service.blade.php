<div class="card mb-3 border-runy-service">
    <div class="card-header border-runy-service">اطلاعات خدمت</div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <label for="price" class="form-label">هزینه خدمت</label>
                <input type="number" class="form-control border-runy-service" wire:model.live.blur="price">
                <span>{{ number_format($price) }}</span>
            </div>
            <div class="col-3">
                <label for="specialPrice" class="form-label">هزینه خدمت فروش ویژه</label>
                <input type="number" class="form-control border-runy-service" wire:model.live.blur="specialPrice">
                <span>{{ number_format($specialPrice) }}</span>
            </div>
            <div class="col-3">
                <label for="input_stock" class="form-label">تعداد این خدمت </label>
                <input type="number" class="form-control border-runy-service" wire:model.live.blur="input_stock">
                <span class="small text-danger">(وارد نکنی بی نهایت  محسوب میشه)</span>
            </div>

            <div class="col-3">
                <label for="input_stock" class="form-label"> واحد پولی </label>
                <strong class="border-runy-service rounded "></strong>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-12"><h4>دوره خدمات</h4></div>
            <div class="col-md-3">
                <div class="form-check pe-3 ps-0">
                    <label class="form-check-label" for="is_expiry">تاریخ اتمام دارد؟</label>
                    <input class="form-check-input float-end" type="checkbox" value="" id="is_expiry"
                           wire:model.live="is_expiry">
                </div>
                @if($is_expiry)
                    <div class="form-check pe-3 ps-0">
                        <label class="form-label" for="number_of_days_to_expiry">چند روز تا انقضا ؟</label>
                        <input class="form-control" type="number" id="number_of_days_to_expiry"
                               wire:model.live.blur="number_of_days_to_expiry">
                    </div>
                @endif
            </div>

            <div class="col-md-4">
                @if($is_expiry)
                    <h6>این تاریخ بعد از خرید اعمال می شود</h6>
                    <button class="btn btn-info" wire:click.prevent="count_day(90)">سه ماه</button>
                    <button class="btn btn-info" wire:click.prevent="count_day(180)">شش ماه</button>
                    <button class="btn btn-info" wire:click.prevent="count_day(363)">یک سال</button>
                @endif
            </div>

        </div>
    </div>
</div>
