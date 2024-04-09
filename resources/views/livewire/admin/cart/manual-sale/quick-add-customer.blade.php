<div>
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="addCustomerLabel">اضافه کردن سریع مشتری</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row g-3">
            <div class="col-md-12">
                <label for="name" class="form-label">نام</label>
                <input type="text" class="form-control" id="name" wire:model.live="name">
            </div>
            <div class="col-md-12">
                <label for="family" class="form-label">نام خانوادگی</label>
                <input type="text" class="form-control" id="family" wire:model.live.blur="family">
            </div>
            <div class="col-md-12">
                <label for="cell" class="form-label">شماره تماس</label>
                <input type="tel" class="form-control" id="cell" wire:model.live="cell">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg" wire:click.prevent="addCustomer()" data-bs-dismiss="modal">اضافه کن</button>
    </div>
</div>
