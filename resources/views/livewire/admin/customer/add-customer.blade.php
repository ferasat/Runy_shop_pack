<div class="modal fade" id="addCustomer" data-bs-backdrop="static"
     data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCustomerLabel"
     style="display: none;" aria-hidden="true" wire:ignore>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCustomerLabel">اضافه کردن</h5>

            </div>
            <div class="modal-body">
                <div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" wire:model.blur="name" placeholder="نام">
                        <label for="name">نام</label>
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="family" wire:model.blur="family" placeholder="نام خانوادگی">
                        <label for="family">نام خانوادگی</label>
                        @error('family') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="cell" wire:model.blur="cell" placeholder="تلفن همراه">
                        <label for="cell">تلفن همراه</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone" wire:model.blur="phone" placeholder="تلفن ثابت">
                        <label for="phone">تلفن ثابت</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" wire:model.blur="email" id="email" placeholder="ایمیل">
                        <label for="email">ایمیل</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" wire:model.blur="address" id="address" placeholder="آدرس" rows="3"></textarea>
                        <label for="address">آدرس</label>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو
                </button>
                <button type="button" class="btn btn-primary" wire:click.privent="save">ذخیره</button>
            </div>
        </div>
    </div>
</div>
