<div class="card" id="edit_{{$user->id}}">
    <div class="card-header">
        <h5 class="modal-title">ویرایش اطلاعات کاربر</h5>

    </div>
    <div class="card-body">
        <div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name_{{$user->id}}" wire:model.blur="name"
                       placeholder="نام">
                <label for="name">نام</label>
                @error('name') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="family_{{$user->id}}" wire:model.blur="family"
                       placeholder="نام خانوادگی">
                <label for="family">نام خانوادگی</label>
                @error('family') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="cell_{{$user->id}}" wire:model.blur="cell"
                       placeholder="تلفن همراه">
                <label for="cell">تلفن همراه</label>
                @error('cell') <span class="text-danger">{{ $message }}</span>@enderror
            </div>


            <div class="form-floating mb-3">
                <input type="email" class="form-control" wire:model.blur="email" id="email_{{$user->id}}"
                       placeholder="ایمیل">
                <label for="email">ایمیل</label>
                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-floating mb-3">
                <select class="form-control" wire:model.blur="role" id="role">
                    <option value="Editor">ویرایشگر</option>
                    <option value="Employee">کارمند</option>
                    <option value="Customer">مشتری</option>
                    <option value="Seller">فروشنده</option>
                    <option value="Support">پشتیبان</option>
                    <option value="SEO">سئوکار</option>
                </select>
                <label for="role">نقش کاربر</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-control" wire:model.blur="levelPermission" id="levelPermission_{{$user->id}}">
                    <option value="4">ویرایشگر 4</option>
                    <option value="2">کارمند 2</option>
                    <option value="1">مشتری 1</option>
                    <option value="3">فروشنده 3</option>
                    <option value="5">پشتیبان 5</option>
                    <option value="4">سئوکار 4</option>
                </select>
                <label for="levelPermission">سطح دسترسی کاربر</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" wire:model.blur="address" id="address_{{$user->id}}" placeholder="آدرس"
                          rows="3"></textarea>
                <label for="address">آدرس</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" wire:model.blur="password" id="password_{{$user->id}}"
                       placeholder="رمز">
                <label for="password">رمزجدید</label>
                <span class="text-info">حداقل باید بیش از 8 کارکتر باشد تا اعمال شود</span>
                @error('password') <span class="text-danger">{{ $message }}</span>@enderror
            </div>


        </div>
    </div>
    <div class="card-footer">
        <button type="button" class="btn btn-secondary" wire:click="call_list_emp">بستن</button>
        <button class="btn btn-danger" wire:click="save({{$user->id}})">ویرایش کن</button>
    </div>
</div>

