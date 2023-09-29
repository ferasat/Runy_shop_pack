<div class="card mb-3">
    <div class="card-header">اطلاعات محصول</div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <label for="price" class="form-label">هزینه خدمت</label>
                <input type="number" class="form-control" wire:model.live.blur="price">
            </div>
            <div class="col-3">
                <label for="specialPrice" class="form-label">هزینه خدمت فروش ویژه</label>
                <input type="number" class="form-control" wire:model.live.blur="specialPrice">
            </div>
            <div class="col-3">
                <label for="input_stock" class="form-label">تعداد این خدمت </label>
                <input type="number" class="form-control" wire:model.live.blur="input_stock">
                <span class="small text-danger">(وارد نکنی بی نهایت  محسوب میشه)</span>
            </div>
            <div class="col-3">
                <label for="input_stock" class="form-label">دوره خدمات  جانبی</label>
                <select class="form-control" wire:model.live.blur="action_periodic">
                    <option value="0">بدون دوره خدمات</option>
                    <option value="1_mon">یک ماه بعد از خرید</option>
                    <option value="2_mon">2 ماه بعد از خرید</option>
                    <option value="3_mon">3 ماه بعد از خرید</option>
                    <option value="4_mon">4 ماه بعد از خرید</option>
                    <option value="5_mon">5 ماه بعد از خرید</option>
                    <option value="6_mon">6 ماه بعد از خرید</option>
                    <option value="7_mon">7 ماه بعد از خرید</option>
                    <option value="1_year">یک سال بعد از خرید</option>
                </select>
            </div>
        </div>
        <div class="row hr mt-3">

        </div>
    </div>
</div>
