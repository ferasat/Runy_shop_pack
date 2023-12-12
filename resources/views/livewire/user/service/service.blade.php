<div class="container py-5" itemtype="https://schema.org/Service">
    <meta itemprop="serviceType" content="{{$service->name}}" />
    @livewire('user.theme.breadcrumbs' , compact('breadcrumbs'))
    <div class="row justify-content-center p-4 mb-4 rounded bg-white">
        @if ($errors->any())
            <div class="col-12">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            </div>
        @endif

            <div class="col-md-8">
                <img class="w-100 rounded" src="{{ asset($service->pic)}}">
            </div>

            <div class="col-md-4">
                <h1 itemprop="name" title="{{$service->name}}" class="entry-title h3">{{$service->name}}</h1>

                <div class="shortDescription" itemprop="description">
                    {!! $service->shortDescription !!}
                </div>

                @if($havePrice)
                <button type="button" class="w-100 btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticReserv">
                    در خواست آنلاین
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticReserv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticReservLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form class="modal-content" method="post" action="{{ asset(route('online.service.reserve')) }}">
                            @csrf
                            <div class="modal-header">
                                <div class="modal-title fs-5 h5" id="staticReservLabel">اطلاعات خود را وارد کنید</div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                    <div class="row mb-3">
                                        <label for="name" class="col-sm-3 col-form-label">نام </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="family" class="col-sm-3 col-form-label">نام خانوادگی </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="family" name="family" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="cellPhone" class="col-sm-3 col-form-label">شماره تماس</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cellPhone" name="mobile" placeholder="09201941482" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-3 col-form-label">ایمیل</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="title h4">زمان پیشنهادی رزرو</div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputEmail4" class="form-label">روز</label>
                                            <select class="form-control" name="day">
                                                <option value="{{ verta(now())->format('%d') }}">{{ verta(now())->format('%d') }}</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">ماه</label>
                                            <select class="form-control" name="month">
                                                <option value="{{ verta(now())->format('%m') }}">{{ verta(now())->format('%B') }}</option>
                                                <option value="01">فروردین</option>
                                                <option value="02">اردیبهشت</option>
                                                <option value="03">خرداد</option>
                                                <option value="04">تیر</option>
                                                <option value="05">مرداد</option>
                                                <option value="06">شهریور</option>
                                                <option value="07">مهر</option>
                                                <option value="08">آبان</option>
                                                <option value="09">آذر</option>
                                                <option value="10">دی</option>
                                                <option value="11">بهمن</option>
                                                <option value="12">اسفند</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">سال</label>
                                            <input value="{{ verta(now())->format('%Y') }}" class="form-control" name="year">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                                <button type="submit" class="btn btn-primary btn-lg">رزرو کن</button>
                            </div>
                            <input type="hidden" value="{{$service->id}}" name="service_id">
                            <input type="hidden" value="{{$service->name}}" name="service_name">
                        </form>
                    </div>
                </div>
                @else
                    <button type="button" class="w-100 btn btn-primary" wire:click.prevent="regRequest({{$service->id}})">
                        ثبت درخواست
                    </button>
                @endif
            </div>

    </div>

    <div class="row g-5">
        <div class="col-md-8">

            <article class="card border-0 shadow-sm">
                <div class="entry-title h3 card-header d-flex justify-content-between" title="{{$service->name}}">
                    <div class="entry-title h3 d-inline">شرح خدمت</div>
                    <!-- Button trigger modal -->

                </div>
                <div class="blog-post-meta card-body">
                    {!! $service->texts !!}
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">آخرین بروزرسانی @if($service->updated_at) {{ verta($service->updated_at)->format('%d %B %Y') }}@else
                            {{ verta($service->created_at )->format('%d %B %Y') }} @endif</small>
                </div>
            </article>
        </div>

        <div class="col-md-4">
            @livewire('user.theme.sidebar.service-sidebar' )
        </div>
    </div>

</div>
