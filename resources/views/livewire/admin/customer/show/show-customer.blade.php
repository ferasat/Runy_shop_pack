<div class="row mt-3">
    <div class="col-xl-8">
        <div class="card ">
            <div class="card-header d-flex justify-content-between">
                <strong>{{ $name .' '.$family }}</strong>

                @if(!$editStatus)
                    <button class="btn btn-runy-primary" wire:click="editOn()">
                        ویرایش
                    </button>
                @else
                    <button class="btn btn-outline-success" wire:click="saveInfo()">
                        ذخیره
                    </button>

                @endif

            </div>
            <div class="card-body row">
                <div class="col-md-3">
                    <img class="img-thumbnail" src="{{ asset($customer->pic) }}" alt="{{ $name .' '.$family }}">
                </div>
                @if(!$editStatus)
                    <div class="col-md-9">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between"><span>نام و نام خانوادگی:</span>
                                <strong>{{ $name.' '.$family }}</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span>شماره موبایل:</span>
                                <strong>{{ $cell }}</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span>رایانامه:</span> <strong
                                    class="text-left" dir="ltr">{{ $email }}</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span>دستبندی:</span>
                                <strong>{{ $type }}</strong></li>
                            <li class="list-group-item d-flex justify-content-between"><span>نام شرکت:</span>
                                <strong>{{ $company }}</strong></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <div class="d-block">
                            <span>آدرس:</span> <strong>{{ $address }}</strong>
                        </div>
                        <div class="d-block">
                            <span>آیا عضو هست :</span> <strong>{{ fullName($customer_user_id) }}</strong>
                        </div>
                    </div>
                @else
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">نام</span>
                            <input type="text" class="form-control" wire:model="name">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">نام خانوادگی</span>
                            <input type="text" class="form-control" wire:model="family">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">شماره همراه</span>
                            <input type="number" class="form-control" wire:model="cell">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">رایانامه</span>
                            <input type="text" class="form-control" wire:model="email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">نام شرکت</span>
                            <input type="text" class="form-control" wire:model="company">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">دستبندی</span>
                            <input type="text" class="form-control" wire:model="type">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">آدرس</span>
                            <textarea class="form-control" wire:model="address"></textarea>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <div class="col-xl-4 ">
        @if($statusManual)
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="">
                        اضافه کردن فعالیت مشتری بصورت دستی
                    </div>
                    <a href="#" wire:click.prevent="status_add_manual()">
                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#6c429a"
                                      stroke-width="1.5" stroke-linecap="round"></path>
                                <path
                                    d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8"
                                    stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="log_subject" class="form-label">عنوان فعالیت</label>
                            <input type="text" class="form-control" id="log_subject" wire:model="log_subject">
                        </div>
                        <div class="col-12">
                            <label for="note" class="form-label">شرح</label>
                            <input type="text" class="form-control" id="note" wire:model="note">
                        </div>
                        <div class="col-md-6">
                            <label for="department" class="form-label">دستبندی فعالیت</label>
                            <datalist id="department">
                                <option value="خرید از سایت">خرید از سایت</option>
                                <option value="عضویت در سایت">عضویت در سایت</option>
                                <option value="خرید حضوری">خرید حضوری</option>
                                <option value="استعلام نرخ حضوری">استعلام نرخ حضوری</option>
                                <option value="استعلام نرخ تلفنی">استعلام نرخ تلفنی</option>
                                <option value="استعلام نرخ در سایت">استعلام نرخ در سایت</option>
                                <option value="حضور در نمایشگاه">حضور در نمایشگاه</option>
                                <option value="شرکت در نظر سنجی حضوری">شرکت در نظر سنجی حضوری</option>
                            </datalist>
                            <input type="text" class="form-control" list="department" autocomplete="off" id="department"
                                   wire:model="department">

                        </div>

                        <div class="col-md-6">
                            <label for="date" class="form-label">تاریخ فعالیت</label>
                            <input type="date" class="form-control" id="date" wire:model="date">
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <button wire:click.prevent="saveLog()" class="btn w-100 btn-outline-primary">ذخیره</button>
                </div>
            </div>
        @else
            <div class="card ">
                <div class="card-header d-flex justify-content-between">
                    <div class="">فعالیت مشتری</div>
                    <button class="btn btn-runy-outline-primary" wire:click.prevent="status_add_manual()">
                        افزودن دستی
                        <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#6c429a"
                                      stroke-width="1.5" stroke-linecap="round"></path>
                                <path
                                    d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8"
                                    stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach($customerLogs as $log)
                            <li class="border rounded mb-2">
                                <div
                                    class="card-title bg-body-secondary p-2 rounded">{{ $log->log_subject .' در بخش '.$log->department }}</div>
                                <div class="card-text p-2 ">
                                    {!! $log->note !!}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-center">{{ $customerLogs->links() }}</div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-runy-outline-primary btn-sm">دیدن فعالیت های بیشتر ...</button>
                </div>
            </div>
        @endif

    </div>
    <div class="col-md-6 my-5">
        @if($statusAddService)
            @livewire('admin.customer.show.add-service')
        @else
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="">تازه ترین خدمات دریافتی</div>
                    <button class="btn btn-runy-outline-primary" wire:click.prevent="status_add_service()">اضافه کردن دستی خدمات</button>
                </div>
                <div class="card-body">
                    @foreach($services as $service)
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="">{{ $service->name }}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>
                <div class="card-footer"></div>
            </div>
        @endif
    </div>
    <div class="col-md-6 my-5">
        @if($statusAddProduct)
            @livewire('admin.customer.show.add-product')
        @else
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="">تازه ترین خرید ها</div>
                    <button class="btn btn-runy-outline-primary" wire:click.prevent="status_add_product()">اضافه کردن دستی خرید</button>
                </div>
                <div class="card-body">
                    @foreach($products as $product)
                        <ul class="list-group">
                            <li class="list-group-item"></li>
                        </ul>
                    @endforeach
                </div>
                <div class="card-footer"></div>
            </div>
        @endif
    </div>
</div>
