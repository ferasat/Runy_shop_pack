<div class="card mb-3 border-runy-service">
    <div class="card-header border-runy-service  bg-runy-service-opt-25">
        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="#6c429a" stroke-width="1.5"></path> <path opacity="0.5" d="M12 15.3333C13.1046 15.3333 14 14.5871 14 13.6667C14 12.7462 13.1046 12 12 12C10.8954 12 10 11.2538 10 10.3333C10 9.41286 10.8954 8.66667 12 8.66667M12 15.3333C10.8954 15.3333 10 14.5871 10 13.6667M12 15.3333V16M12 8V8.66667M12 8.66667C13.1046 8.66667 14 9.41286 14 10.3333" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        اطلاعات مالی</div>
    <div class="card-body">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">هزینه هنگام رزرو دارد ؟</label>
            <div class="col-sm-9">
                <select class="form-select border-runy-service" wire:model.live.blur="havePrice">
                    <option value="0">خیر بعد برآورده هزینه می شود</option>
                    <option value="1">بله باید پرداخت آنلاین کند</option>
                </select>
            </div>
        </div>
        @if($havePrice == 1)
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
        @endif
    </div>
</div>
