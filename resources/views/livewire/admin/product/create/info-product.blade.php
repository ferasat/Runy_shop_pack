<div class="card mb-3">
    <div class="card-header">اطلاعات محصول</div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <label for="price" class="form-label">قیمت محصول</label>
                <input type="number" class="form-control" wire:model.lazy="price">
            </div>
            <div class="col-3">
                <label for="specialPrice" class="form-label">قیمت فروش ویژه</label>
                <input type="number" class="form-control" wire:model.lazy="specialPrice">
            </div>
            <div class="col-3">
                <label for="input_stock" class="form-label">تعداد موجودی محصول</label>
                <input type="number" class="form-control" wire:model.lazy="input_stock">
            </div>
        </div>
        <div class="row hr mt-3">

        </div>
    </div>
</div>
