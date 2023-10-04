@extends('layouts.runyApp',[ 'title'=>'تنظیمات سئو', 'description'=>'' ])

@section('content')

    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <main class="dashboard-setting-page ">
            <div class="container mt-5">
                <div class="row">
                    <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                        <div class="row ">
                            <div class="col-xl-12 mb-5">
                                <form class="scroll-section" method="post" action="{{ asset(route('runy_seo_save')) }}">
                                    @csrf

                                    <div class="card mb-3">
                                        <div class="card-header">{{ __('تنظیمات عمومی سئو') }}</div>
                                        <div class="card-body mb-n2 border-last-none h-100">

                                            <div class="row mb-3">
                                                <label for="site_name" class="col-sm-2 col-form-label">نام سایت</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                           class="form-control"
                                                           id="site_name"
                                                           name="site_name" value="{{$seo_public->site_name}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name_home_page" class="col-sm-2 col-form-label">عنوان صفحه
                                                    اول</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                           class="form-control"
                                                           id="name_home_page"
                                                           name="name_home_page"
                                                           value="{{$seo_public->name_home_page}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="description_home_page" class="col-sm-2 col-form-label">توضیحات
                                                    صفحه اول
                                                    سایت</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                           class="form-control"
                                                           id="description_home_page"
                                                           name="description_home_page"
                                                           value="{{$seo_public->description_home_page}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="keyword_home_page" class="col-sm-2 col-form-label">کلمات
                                                    کلیدی صفحه اول سایت</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                           class="form-control"
                                                           id="keyword_home_page"
                                                           name="keyword_home_page"
                                                           value="{{$seo_public->keyword_home_page}}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body mb-n2 border-last-none h-100">

                                            <div class="row mb-3">
                                                <label for="site_scripts" class="col-sm-2 col-form-label">اسکریپت
                                                    ها</label>
                                                <div class="col-sm-10">
                                                    <textarea type="text" class="form-control text-left" id="site_scripts"
                                                              name="site_scripts" dir="ltr">
                                                        {!! $seo_public->site_scripts !!}
                                                    </textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="cart-footer text-center py-2">
                                            <button class="btn btn-runy-primary btn-lg " type="submit">ذخیره</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    @livewire('admin.theme.sidebar.sidebar-admin-setting')

                </div>
            </div>
        </main>

    </div>
    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
