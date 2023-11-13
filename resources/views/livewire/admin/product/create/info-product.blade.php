<div class="card mb-3 border-color-runy-primary">
    <div class="card-header border-color-runy-primary">
        <svg class="icon-svg-panel" viewBox="0 0 32 32" id="OBJECT" xmlns="http://www.w3.org/2000/svg" fill="#6c429a"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:#ea9adf;}</style></defs><title></title><path class="cls-1" d="M28,9H4a1,1,0,0,0-1,1V28a3,3,0,0,0,3,3H26a3,3,0,0,0,3-3V10A1,1,0,0,0,28,9Z"></path><path d="M20,14H12a3,3,0,0,0,0,6h8a3,3,0,0,0,0-6Z"></path><path d="M24,28H18a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z"></path><path d="M24,25H21a1,1,0,0,1,0-2h3a1,1,0,0,1,0,2Z"></path><path d="M30,1H2A1,1,0,0,0,1,2V8a3,3,0,0,0,3,3H28a3,3,0,0,0,3-3V2A1,1,0,0,0,30,1Z"></path></g></svg>
        اطلاعات محصول
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <label for="price" class="form-label">قیمت محصول</label>
                <input type="number" class="form-control" wire:model.live.blur="price">
            </div>
            <div class="col-3">
                <label for="specialPrice" class="form-label">قیمت فروش ویژه</label>
                <input type="number" class="form-control" wire:model.live.blur="specialPrice">
            </div>
            <div class="col-3">
                <label for="input_stock" class="form-label">تعداد موجودی محصول</label>
                <input type="number" class="form-control" wire:model.live.blur="input_stock">
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
