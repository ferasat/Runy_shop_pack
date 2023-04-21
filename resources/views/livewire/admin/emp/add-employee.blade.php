<div class="modal fade" id="addEmployee" data-bs-backdrop="static"
     data-bs-keyboard="false" tabindex="-1" aria-labelledby="addEmployeeLabel"
     style="display: none;" aria-hidden="true" wire:ignore>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeLabel">اضافه کردن</h5>

            </div>
            <div class="modal-body">
                <div>
                    {{--@if(is_api_access (Auth::user()->type_user))
                        <div class="form-floating mb-3">
                            <select class="form-select" id="company_id" wire:model.lazy="company_id">
                                <option value="0">طراح سایت</option>
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                            <label for="company">شرکت</label>
                            @error('company_id') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    @endif--}}

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" wire:model.lazy="name" placeholder="نام">
                        <label for="name">نام</label>
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="family" wire:model.lazy="family" placeholder="نام خانوادگی">
                        <label for="family">نام خانوادگی</label>
                        @error('family') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="cell" wire:model.lazy="cell" placeholder="تلفن همراه">
                        <label for="cell">تلفن همراه</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="company_id" wire:model.lazy="role">
                            <option value="Admin">مدیریت</option>
                            <option value="Editor">ویرایشگر</option>
                            <option value="SEO">سئو کار</option>
                            <option value="Employee">کارمند</option>
                            <option value="Seller">فروشنده</option>
                            <option value="Customer">مشتری</option>
                            <option value="Support">پشتیبان</option>
                            <option value="Acc">حسابدار</option>
                        </select>
                        <label for="company">سمت</label>
                        @error('company_id') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="levelPermission" wire:model.lazy="levelPermission">
                            <option value="1">1 = (مشتری)</option>
                            <option value="9">9 = (مدیریت)</option>
                            <option value="6">6 = (حسابدار)</option>
                            <option value="5">5 = (فروشنده و پشتیبان)</option>
                            <option value="4">4 = (ویرایشگر)</option>
                            <option value="3">3 = ()</option>
                            <option value="2">2 = (کارمند)</option>
                        </select>
                        <label for="company">سطح دسترسی</label>
                        @error('levelPermission') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>


                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" wire:model.lazy="email" id="email" placeholder="ایمیل">
                        <label for="email">ایمیل</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" wire:model.lazy="address" id="address" placeholder="آدرس" rows="3"></textarea>
                        <label for="address">آدرس</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" wire:model.lazy="password" id="password" placeholder="رمز">
                        <label for="password">رمز</label>
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
