<div class="row mt-3">
    <div class="col-xl-8">
        <div class="card ">
            <div class="card-header d-flex justify-content-between">
                <strong>{{ $name .' '.$family }}</strong>

                @if(!$editStatus)
                    <div class="">
                        <button class="btn btn-runy-primary" wire:click="editOn()">
                            ویرایش
                            <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z" stroke="#ffffff" stroke-width="1.5"></path> <path opacity="0.5" d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9" stroke="#ffffff" stroke-width="1.5"></path> </g></svg>

                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteCustomer">
                            حذف
                            <svg class="icon-svg-panel-sm" fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 589.004 589.004" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M451.716,146.986H137.289c-16.287,0-31.952,6.876-42.977,18.865c-11.025,11.988-16.566,28.173-15.205,44.403 l27.241,324.744c1.227,14.629,7.854,28.158,18.66,38.096c10.805,9.938,24.842,15.41,39.521,15.41h259.947 c14.68,0,28.715-5.473,39.521-15.41s17.434-23.467,18.66-38.097l27.24-324.744c1.361-16.229-4.18-32.414-15.205-44.402 C483.669,153.862,468.003,146.986,451.716,146.986z M467.208,206.672l-27.24,324.745c-0.676,8.055-7.41,14.247-15.492,14.247 H164.53c-8.083,0-14.817-6.192-15.492-14.247l-27.241-324.745c-0.761-9.067,6.393-16.846,15.492-16.846h314.427 C460.815,189.826,467.968,197.605,467.208,206.672z"></path> <path d="M424.476,589.004H164.529c-14.807,0-28.962-5.52-39.86-15.542c-10.899-10.022-17.583-23.668-18.82-38.422L78.608,210.296 c-1.373-16.37,4.216-32.693,15.335-44.784c11.119-12.092,26.918-19.027,43.345-19.027h314.427 c16.429,0,32.227,6.935,43.345,19.027c11.119,12.09,16.708,28.413,15.335,44.782l-27.24,324.744 c-1.237,14.755-7.921,28.4-18.819,38.423C453.437,583.484,439.28,589.004,424.476,589.004z M137.289,147.486 c-16.148,0-31.679,6.817-42.609,18.704c-10.93,11.885-16.425,27.931-15.075,44.023l27.241,324.744 c1.216,14.504,7.787,27.917,18.5,37.77c10.712,9.853,24.628,15.278,39.183,15.278h259.947c14.554,0,28.469-5.426,39.183-15.278 c10.715-9.853,17.285-23.266,18.501-37.771l27.24-324.744c1.35-16.091-4.145-32.137-15.075-44.021 c-10.929-11.886-26.459-18.704-42.608-18.704H137.289z M424.476,546.164H164.53c-8.275,0-15.299-6.459-15.99-14.705 l-27.241-324.745c-0.374-4.461,1.149-8.909,4.179-12.203c3.03-3.295,7.335-5.185,11.811-5.185h314.427 c4.477,0,8.781,1.889,11.811,5.184c3.03,3.294,4.554,7.743,4.18,12.204l-27.24,324.745 C439.774,539.705,432.75,546.164,424.476,546.164z M137.289,190.326c-4.197,0-8.234,1.772-11.075,4.861 c-2.841,3.089-4.269,7.26-3.918,11.442l27.241,324.745c0.648,7.732,7.234,13.789,14.994,13.789h259.946 c7.759,0,14.346-6.057,14.994-13.789l27.24-324.745c0.351-4.183-1.078-8.354-3.92-11.443c-2.841-3.089-6.877-4.86-11.074-4.86 H137.289z"></path> </g> <g> <path d="M89.292,123.835h410.42c11.83,0,21.42-9.59,21.42-21.42c0-11.83-9.59-21.42-21.42-21.42h-77.799v-0.966V58.886 c0-32.194-26.191-58.386-58.385-58.386H225.478c-32.194,0-58.386,26.192-58.386,58.386v21.143v0.966H89.292 c-11.83,0-21.42,9.59-21.42,21.42C67.872,114.245,77.462,123.835,89.292,123.835z M209.931,58.886 c0-8.586,6.96-15.546,15.546-15.546h138.051c8.584,0,15.545,6.96,15.545,15.546v21.143H209.931V58.886z"></path> <path d="M499.712,124.335H89.292c-12.087,0-21.92-9.833-21.92-21.92c0-12.086,9.833-21.92,21.92-21.92h77.299V58.886 C166.591,26.417,193.007,0,225.478,0h138.051c32.469,0,58.885,26.417,58.885,58.886v21.609h77.299 c12.087,0,21.92,9.833,21.92,21.92C521.632,114.502,511.799,124.335,499.712,124.335z M89.292,81.495 c-11.535,0-20.92,9.385-20.92,20.92c0,11.536,9.385,20.92,20.92,20.92h410.42c11.535,0,20.92-9.385,20.92-20.92 c0-11.535-9.385-20.92-20.92-20.92h-78.299V58.886C421.413,26.968,395.446,1,363.528,1H225.478 c-31.918,0-57.886,25.968-57.886,57.886v22.609H89.292z M379.573,80.528H209.431V58.886c0-8.848,7.198-16.046,16.046-16.046 h138.051c8.848,0,16.045,7.198,16.045,16.046V80.528z M210.431,79.528h168.142V58.886c0-8.296-6.749-15.046-15.045-15.046H225.478 c-8.297,0-15.046,6.75-15.046,15.046V79.528z"></path> </g> <g> <path d="M218.867,272.233c-0.78-11.805-10.99-20.739-22.785-19.961c-11.805,0.78-20.742,10.982-19.961,22.786l12.438,188.198 c0.748,11.323,10.166,20.008,21.352,20.008c0.475,0,0.953-0.016,1.434-0.047c11.804-0.78,20.741-10.981,19.961-22.786 L218.867,272.233z"></path> <path d="M209.91,483.765c-11.494,0-21.092-8.993-21.851-20.475l-12.438-188.198c-0.386-5.843,1.526-11.485,5.384-15.89 s9.201-7.042,15.043-7.429c12.139-0.79,22.526,8.462,23.317,20.427l12.438,188.198c0.797,12.061-8.366,22.521-20.427,23.318 C210.885,483.749,210.396,483.765,209.91,483.765z M197.511,252.725c-0.463,0-0.928,0.016-1.396,0.046 c-5.576,0.369-10.674,2.886-14.357,7.089c-3.682,4.204-5.507,9.589-5.138,15.165l12.438,188.198 c0.754,11.422,10.691,20.246,22.254,19.495c11.51-0.761,20.255-10.744,19.495-22.254l-12.438-188.198 C217.645,261.309,208.483,252.725,197.511,252.725z"></path> </g> <g> <path d="M294.502,252.226c-11.83,0-21.42,9.59-21.42,21.42v188.198c0,11.83,9.59,21.42,21.42,21.42 c11.831,0,21.42-9.59,21.42-21.42V273.646C315.923,261.816,306.333,252.226,294.502,252.226z"></path> <path d="M294.502,483.764c-12.087,0-21.92-9.833-21.92-21.92V273.646c0-12.087,9.833-21.92,21.92-21.92 c12.087,0,21.92,9.833,21.92,21.92v188.198C316.423,473.931,306.59,483.764,294.502,483.764z M294.502,252.726 c-11.535,0-20.92,9.385-20.92,20.92v188.198c0,11.535,9.385,20.92,20.92,20.92c11.536,0,20.92-9.385,20.92-20.92V273.646 C315.423,262.11,306.038,252.726,294.502,252.726z"></path> </g> <g> <path d="M392.923,252.272c-11.797-0.778-22.006,8.156-22.785,19.961L357.7,460.432c-0.779,11.805,8.156,22.006,19.961,22.786 c0.482,0.031,0.959,0.047,1.434,0.047c11.186,0,20.604-8.686,21.354-20.008l12.436-188.198 C413.665,263.254,404.728,253.052,392.923,252.272z"></path> <path d="M379.095,483.765c-0.485,0-0.973-0.016-1.466-0.048c-12.061-0.797-21.224-11.258-20.428-23.318l12.438-188.198 c0.79-11.965,11.187-21.222,23.317-20.427c5.843,0.386,11.185,3.024,15.043,7.428s5.771,10.047,5.384,15.89L400.947,463.29 C400.187,474.771,390.588,483.765,379.095,483.765z M391.493,252.725c-10.972,0-20.133,8.583-20.856,19.541l-12.438,188.199 c-0.76,11.51,7.985,21.493,19.495,22.254c11.605,0.75,21.499-8.074,22.255-19.495l12.436-188.198 c0.369-5.576-1.455-10.961-5.138-15.165c-3.683-4.204-8.781-6.721-14.357-7.089C392.422,252.741,391.956,252.725,391.493,252.725z "></path> </g> </g> </g></svg>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteCustomerLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="deleteCustomerLabel">برای حذف مشتری مطمئن هستید ؟</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-danger">
                                        در صورت زدن گزینه بله ، اطلاعات حذف خواهد شد و دیگر در دسترس نخواهد بود .
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خیر</button>
                                        <button class="btn btn-danger" wire:click.prevent="deleteCustomer({{$customer->id}})">بله حذف کن</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @else
                    <div class="">
                    <button class="btn btn-outline-success" wire:click="saveInfo()">
                        ذخیره
                        <svg class="icon-svg-panel-sm" fill="#ffffff" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M26 0H6a6 6 0 0 0-6 6v20a6 6 0 0 0 6 6h20a6 6 0 0 0 6-6V6a6 6 0 0 0-6-6zm-6 2v3a1 1 0 1 0 2 0V2h1v7H9V2zm10 24a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V6a4 4 0 0 1 4-4h1v8a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2h1a4 4 0 0 1 4 4zM24 14H8a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V15a1 1 0 0 0-1-1zm-1 12H9V16h14zM12 20h8a1 1 0 0 0 0-2h-8a1 1 0 0 0 0 2zM12 24h8a1 1 0 0 0 0-2h-8a1 1 0 0 0 0 2z"></path> </g></svg>
                    </button>
                    <button class="btn btn-warning" wire:click="editOn()">
                        لغو
                        <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 12L7 12L11 16M11 8L9 10M20.0645 16C20.6633 14.795 21 13.4368 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C13.8501 21 15.5699 20.4417 17 19.4845" stroke="#19191a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </button>
                    </div>
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
                            <input type="email" class="form-control" wire:model="email">
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
                    <a href="{{ asset(route('create.cart')) }}" class="btn btn-runy-outline-primary" >اضافه کردن دستی خدمات</a>
                </div>
                <div class="card-body">
                    @foreach($ordersServices as $service)
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="">{{ $service->product_name }}</a>
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
                    <a href="{{ asset(route('create.cart')) }}" class="btn btn-runy-outline-primary" >اضافه کردن دستی خرید</a>
                </div>
                <div class="card-body">
                    @foreach($ordersProducts as $product)
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="">{{ $product->product_name }}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>
                <div class="card-footer"></div>
            </div>
        @endif
    </div>
</div>
