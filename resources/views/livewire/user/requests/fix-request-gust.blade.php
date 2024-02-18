<div class="row ">
    <div class="col-xl-9 mb-5">
        <section class="scroll-section" id="listPost">

            <div class="card h-100-card">
                <div class="card-header"></div>
                <div class="card-body mb-n2 border-last-none">
                    @if($showResult==0)
                        <form class="row g-3" method="post" action="{{ asset(route('fix_request_save')) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4">
                                <label for="name" class="form-label">نام</label>
                                <input type="text" class="form-control" id="name" name="name" wire:model.live="name" required @if(Auth::check()) disabled @endif>
                                @error('name') <span class="bg-danger p-1 rounded-3">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="family" class="form-label">نام خانوادگی</label>
                                <input type="text" class="form-control" id="family" name="family" wire:model.live="family" @if(Auth::check()) disabled @endif>
                                @error('family') <span class="bg-danger p-1 rounded-3">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="cell" class="form-label">شماره تماس</label>
                                <input type="text" class="form-control" id="cell" name="cell" wire:model.live="cell" required @if(Auth::check()) disabled @endif>
                                @error('cell') <span class="bg-danger p-1 rounded-3">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">آدرس</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="اصفهان"
                                       wire:model.live="address">
                                @error('address') <span class="bg-danger p-1 rounded-3">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="department" class="form-label">بخش</label>
                                <select id="department" class="form-select" name="department" wire:model.live="department">
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                @error('department') <span class="bg-danger p-1 rounded-3">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="pic" class="form-label">تصویر دستگاه</label>
                                <input type="file" class="form-control" id="pic" name="pic" wire:model.live="pic">
                                @error('pic') <span class="bg-danger p-1 rounded-3">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="title" class="form-label">عنوان</label>
                                <input type="text" class="form-control" id="title" name="title" wire:model.live="title">
                                @error('title') <span class="bg-danger p-1 rounded-3">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="description" class="form-label">توضیحات</label>
                                <textarea class="form-control" id="description" name="description" wire:model.live="description"></textarea>
                                @error('description') <span class="bg-danger p-1 rounded-3">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" >ثبت کن</button>
                            </div>
                        </form>
                    @elseif($showResult==1)
                        <div class="p-3 text-center bg-success">
                            در خواست شما با کد <strong>{{ $rqs_code }}</strong> ثبت شد .
                        </div>
                    @elseif($showResult==2)
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="name" class="form-label">عنوان در خواست :</label>: {{ $rqs_p->name }}
                            </div>
                            <div class="col-md-4">
                                <label for="family" class="form-label">بخش :</label>{{ get_department_name($rqs_p->for_department_id) }}
                            </div>

                            <div class="col-md-4">
                                <label for="address" class="form-label">وضعیت درخواست </label>: {{ $rqs_p->status }}
                            </div>



                            {{--<div class="col-md-2">
                                <label for="inputZip" class="form-label">تصویر دستگاه</label>
                                <img src="{{ asset() }}">
                            </div>--}}

                            <div class="col-md-12">
                                <label for="description" class="form-label">توضیحات</label>: {{$rqs_p->note}}
                            </div>


                        </div>
                    @endif
                </div>
                <div class="card-footer"></div>
            </div>
        </section>
    </div>
    <div class="col-xl-3 mb-5">
        <div class="card ">
            <div class="card-header">دسترسی ها</div>
            <div class="card-body mb-n2 border-last-none">
                @if(!Auth::check())
                    <div class="mb-3">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login_">
                            ورود به سامانه
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="login_" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="login_Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="login_Label">ورود به سامانه</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="loginForm" class="tooltip-end-bottom" novalidate="novalidate" action="{{ asset('/login') }}" method="post">
                                            @csrf
                                            <div class="mb-3 filled form-group tooltip-end-top">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-email"><path d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7"></path><path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path></svg>
                                                <input class="form-control pe-7" placeholder="ایمیل یا نام کاربری" name="email" aria-describedby="email-error" aria-invalid="true">
                                                @error('email')<div id="email-error" class="error">This field is required.</div>@enderror
                                            </div>
                                            <div class="mb-3 filled form-group tooltip-end-top">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-lock-off"><path d="M5 12.6667C5 12.0467 5 11.7367 5.06815 11.4824C5.25308 10.7922 5.79218 10.2531 6.48236 10.0681C6.73669 10 7.04669 10 7.66667 10H12.3333C12.9533 10 13.2633 10 13.5176 10.0681C14.2078 10.2531 14.7469 10.7922 14.9319 11.4824C15 11.7367 15 12.0467 15 12.6667V13C15 13.9293 15 14.394 14.9231 14.7804C14.6075 16.3671 13.3671 17.6075 11.7804 17.9231C11.394 18 10.9293 18 10 18V18C9.07069 18 8.60603 18 8.21964 17.9231C6.63288 17.6075 5.39249 16.3671 5.07686 14.7804C5 14.394 5 13.9293 5 13V12.6667Z"></path><path d="M11 15H10 9M13 6V5C13 3.34315 11.6569 2 10 2V2C8.34315 2 7 3.34315 7 5V10"></path></svg>
                                                <input class="form-control pe-7" name="password" type="password" placeholder="رمز">

                                            </div>
                                            <button type="submit" class="btn btn-lg btn-primary">ورود</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="get_info" class="form-label">پیگیری سفارش</label>
                    <input type="text" class="form-control" id="get_info" wire:model.live="get_code" placeholder="شماره پیگیری را وارد کنید.">
                    <button class="btn btn-outline-primary" wire:click.prevent="get_rqs_info">جستجو</button>
                </div>

            </div>
        </div>
    </div>
</div>
