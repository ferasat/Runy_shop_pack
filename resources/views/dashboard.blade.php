@extends('layouts.runyApp' , ['title'=>'پیشخوان'])
@section('content')

    <!-- responsive-header -->

    <div class="wrapper ">
        @if(Auth::check() and Auth::user()->levelPermission > 2)
            @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        @else
            @livewire('user.dashboard.user-cp-header')
        @endif

        <main class="dashboard-user-page ">
            @if(Auth::user()->levelPermission > 2)
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mt-2 shadow">
                                    <div class="card-header placeholder-glow">
                                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#6c429a" stroke-width="1.5"></path> <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#6c429a" stroke-width="1.5"></path> <path d="M11 10.8L12.1429 12L15 9" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                        سفارشات</div>
                                    <div class="card-body placeholder-glow">
                                        <ul>
                                            <li class="d-flex justify-content-between mb-1 "><span>شفارشات امروز :</span> <div class="badge bg-danger">5 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>شفارشات در حال اجرا :</span> <div class="badge bg-warning">1 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>شفارشات انجام شده : </span><div class="badge bg-success">1 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>شفارشات لغو شده : </span><div class="badge bg-secondary">1 تا</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 shadow">
                                    <div class="card-header placeholder-glow">
                                        <svg class="icon-svg-panel" fill="#6c429a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M69.1,28.9L55.9,15.7c-0.3-0.3-0.6-0.4-1-0.4c-0.8,0-1.4,0.6-1.4,1.4v10.6c0,2.2,1.8,4,4,4h10.6 c0.8,0,1.4-0.6,1.4-1.4C69.5,29.5,69.4,29.2,69.1,28.9z M69.5,39.3c0-1.1-0.9-2-2-2h-14c-3.3,0-6-2.7-6-6v-14c0-1.1-0.9-2-2-2h-20 c-3.3,0-6,2.7-6,6v48c0,3.3,2.7,6,6,6c0,0,18.7,0,20.3,0s2-1.1,1.9-2.8s-0.7-9,4.3-14.8s13.2-6.2,14.4-6.2c1.2,0,3.2-0.1,3.1-1.8 S69.5,39.3,69.5,39.3z M26.5,27.9l4.9-0.7c0.1,0,0.3-0.1,0.3-0.2l2.2-4.5c0.2-0.3,0.6-0.3,0.8,0l2.2,4.5c0.1,0.1,0.2,0.2,0.3,0.2 l4.9,0.7c0.3,0.1,0.5,0.5,0.2,0.7l-3.6,3.5c-0.1,0.1-0.1,0.2-0.1,0.4l0.8,4.9c0.1,0.3-0.3,0.6-0.6,0.4l-4.4-2.3 c-0.1-0.1-0.3-0.1-0.4,0l-4.4,2.3c-0.3,0.2-0.7-0.1-0.6-0.4l0.8-4.9c0-0.1,0-0.3-0.1-0.4l-3.6-3.5C26,28.4,26.2,28,26.5,27.9z M44.5,61.3c0,1.1-0.9,2-2,2h-13c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h13c1.1,0,2,0.9,2,2V61.3z M55.5,49.3c0,1.1-0.9,2-2,2h-24 c-1.1,0-2-0.9-2-2v-2c0-1.1,0.9-2,2-2h24c1.1,0,2,0.9,2,2V49.3z"></path> <path d="M66.3,56.2c-7.9,0-14.3,6.4-14.3,14.3s6.4,14.3,14.3,14.3s14.3-6.4,14.3-14.3S74.1,56.2,66.3,56.2z M68.8,71.8c-0.4,0-0.8-0.1-1.2-0.2L62.1,77c-0.4,0.4-0.8,0.5-1.2,0.5c-0.5,0-0.8-0.1-1.2-0.5c-0.6-0.6-0.6-1.7,0-2.4l5.5-5.5 C65.1,68.8,65,68.4,65,68c-0.2-2.5,1.8-4.8,4.3-4.8c0.4,0,0.8,0.1,1.2,0.2c0.2,0,0.2,0.2,0.1,0.4l-2.4,2.5c-0.2,0.1-0.2,0.5,0,0.6 l1.7,1.7c0.2,0.2,0.5,0.2,0.7,0l2.4-2.4c0.1-0.1,0.4-0.1,0.4,0.1c0.1,0.4,0.2,0.8,0.2,1.2C73.5,70,71.4,72,68.8,71.8z"></path> </g> </g></svg>
                                        خدمات</div>
                                    <div class="card-body placeholder-glow">
                                        <ul>
                                            <li class="d-flex justify-content-between mb-1 "><span>درخواست امروز :</span> <div class="badge bg-danger">5 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>خدمات در حال اجرا :</span> <div class="badge bg-warning">1 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>کل خدمات انجام شده: </span><div class="badge bg-success">1 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>درخواست لغو شده : </span><div class="badge bg-secondary">1 تا</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-2 shadow" aria-hidden="true">
                                    <div class="card-header placeholder-glow">
                                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="10" cy="6" r="4" stroke="#6c429a" stroke-width="1.5"></circle> <path opacity="0.5" d="M18 17.5C18 19.9853 18 22 10 22C2 22 2 19.9853 2 17.5C2 15.0147 5.58172 13 10 13C14.4183 13 18 15.0147 18 17.5Z" stroke="#6c429a" stroke-width="1.5"></path> <path d="M18.0885 12.5385L18.5435 11.9423L18.0885 12.5385ZM19 8.64354L18.4681 9.17232C18.6089 9.31392 18.8003 9.39354 19 9.39354C19.1997 9.39354 19.3911 9.31392 19.5319 9.17232L19 8.64354ZM19.9115 12.5385L19.4565 11.9423L19.9115 12.5385ZM18.5435 11.9423C18.0571 11.571 17.619 11.274 17.2659 10.8891C16.9387 10.5324 16.75 10.1638 16.75 9.69973H15.25C15.25 10.6481 15.6642 11.362 16.1606 11.9031C16.6311 12.4161 17.2372 12.8322 17.6335 13.1347L18.5435 11.9423ZM16.75 9.69973C16.75 9.28775 16.9898 8.95469 17.2973 8.81862C17.5635 8.7008 17.9874 8.68874 18.4681 9.17232L19.5319 8.11476C18.6627 7.24047 17.5865 7.0503 16.6903 7.44694C15.8352 7.82533 15.25 8.69929 15.25 9.69973H16.75ZM17.6335 13.1347C17.7825 13.2483 17.9756 13.3959 18.1793 13.5111C18.3832 13.6265 18.6656 13.75 19 13.75V12.25C19.0344 12.25 19.0168 12.2615 18.9179 12.2056C18.8187 12.1495 18.7061 12.0663 18.5435 11.9423L17.6335 13.1347ZM20.3665 13.1347C20.7628 12.8322 21.3689 12.4161 21.8394 11.9031C22.3358 11.362 22.75 10.6481 22.75 9.69973H21.25C21.25 10.1638 21.0613 10.5324 20.7341 10.8891C20.381 11.274 19.9429 11.571 19.4565 11.9423L20.3665 13.1347ZM22.75 9.69973C22.75 8.69929 22.1648 7.82533 21.3097 7.44694C20.4135 7.0503 19.3373 7.24047 18.4681 8.11476L19.5319 9.17232C20.0126 8.68874 20.4365 8.7008 20.7027 8.81862C21.0102 8.95469 21.25 9.28775 21.25 9.69973H22.75ZM19.4565 11.9423C19.2939 12.0663 19.1813 12.1495 19.0821 12.2056C18.9832 12.2615 18.9656 12.25 19 12.25V13.75C19.3344 13.75 19.6168 13.6265 19.8207 13.5111C20.0244 13.3959 20.2175 13.2483 20.3665 13.1347L19.4565 11.9423Z" fill="#6c429a"></path> </g></svg>
                                        باشگاه مشتریان</div>
                                    <div class="card-body placeholder-glow">
                                        <ul>
                                            <li class="d-flex justify-content-between mb-1 "><span>کابران اضافه شده :</span> <div class="badge bg-danger">5 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>تعداد پیامک های خدماتی :</span> <div class="badge bg-warning">200 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>کل پیام های ارسال شده شده: </span><div class="badge bg-success">850 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>باقی مانده پیامک : </span><div class="badge bg-secondary">50 تا</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mt-2 shadow" aria-hidden="true">
                                    <div class="card-header placeholder-glow">
                                        <svg class="icon-svg-panel" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>Ecommerce copia 3</title><polygon points="80 48.04 80 92.04 74 92.04 74 73.29 62.26 73.29 62.26 54.29 38.26 54.29 38.26 73.29 26 73.29 26 92.04 20 92.04 20 48.04 80 48.04" fill="#e1f6fa"></polygon><polygon points="66.5 74.19 66.5 84.19 62 80.02 57.5 84.19 57.5 74.19 66.5 74.19" fill="#9ae3f0"></polygon><polygon points="54.76 55.19 54.76 65.19 50.26 61.02 45.76 65.19 45.76 55.19 54.76 55.19" fill="#9ae3f0"></polygon><polygon points="42.5 74.19 42.5 84.19 38 80.02 33.5 84.19 33.5 74.19 42.5 74.19" fill="#9ae3f0"></polygon><rect x="20" y="47.04" width="60" height="2" fill="#6c429a"></rect><path d="M91,93H79V35H21V93H9V35H5V25.37l0.62-.25L50,7l0.38,0.15L95,25.37V35H91V93ZM81,91h8V33h4V26.71L50,9.12,7,26.71V33h4V91h8V33H81V91Z" fill="#6c429a"></path><rect x="20" y="40.04" width="60" height="2" fill="#6c429a"></rect><path d="M74,93H26a1,1,0,0,1-1-1V73.29a1,1,0,0,1,1-1H74a1,1,0,0,1,1,1V92A1,1,0,0,1,74,93ZM27,91H73V74.29H27V91Z" fill="#6c429a"></path><rect x="49" y="73.29" width="2" height="19.5" fill="#6c429a"></rect><path d="M63.26,73.79h-2V55.29h-22v18.5h-2V54.29a1,1,0,0,1,1-1h24a1,1,0,0,1,1,1v19.5Z" fill="#6c429a"></path><rect width="100" height="100" fill="none"></rect></g></svg>
                                        وضعیت انبار</div>
                                    <div class="card-body placeholder-glow">
                                        <ul>
                                            <li class="d-flex justify-content-between mb-1 "><span>محصولات تمام شده :</span> <div class="badge bg-danger">5 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>محصولات رو به اتمام :</span> <div class="badge bg-warning">200 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 "><span>کل محصولات: </span><div class="badge bg-success">850 تا</div></li>
<!--                                            <li class="d-flex justify-content-between mb-1 "><span>باقی مانده پیامک : </span><div class="badge bg-secondary">50 تا</div></li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mt-2 shadow">
                                    <div class="card-header placeholder-glow">
                                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z" stroke="#6c429a" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.4" d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#6c429a" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        پیامک</div>
                                    <div class="card-body placeholder-glow">
                                        <ul>
                                            <li class="d-flex justify-content-between mb-1 placeholder"><span>ارسالی های امروز :</span> <div class="badge bg-danger">5 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 placeholder"><span>تعداد پیامک های خدماتی :</span> <div class="badge bg-warning">200 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 placeholder"><span>کل پیام های ارسال شده شده: </span><div class="badge bg-success">850 تا</div></li>
                                            <li class="d-flex justify-content-between mb-1 placeholder"><span>باقی مانده پیامک : </span><div class="badge bg-secondary">50 تا</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @livewire('admin.theme.sidebar.sidebar-admin')
                </div>
            </div>
            @else
                <div class="d-flex justify-content-center">
                <h1>در حال بروزرسانی هستیم  . از صبر شما متشکریم .</h1>
                <div class="profile-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-1">
                    <div class="profile-box">
                        <div class="profile-box-header bg-runy-primary">
                            <div class="profile-box-avatar">
                                <img src="{{ asset(Auth::user()->pic) }}" alt="{{ fullName(Auth::user()->id) }}">
                            </div>
                            <button data-bs-toggle="modal" data-bs-target="#myProfile" class="profile-box-btn-edit">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <!-- Modal Core -->
                            <div class="modal-share modal-width-custom modal fade" id="myProfile" tabindex="-1"
                                 role="dialog" aria-labelledby="myProfileLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×
                                            </button>
                                            <h4 class="modal-title" id="myProfileLabel">تغییر نمایه کاربری شما</h4>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="profile-avatars default text-center">
                                                <li>
                                                    <img class="profile-avatars-item"
                                                         src="{{ asset(Auth::user()->pic) }}">
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Core -->
                        </div>
                        <div class="profile-box-username">{{ fullName(Auth::user()->id) }}</div>

                    </div>


                </div>
                </div>
            @endif
        </main>
    </div>

    @if(Auth::check() and Auth::user()->levelPermission > 2)
        @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
    @else
        @livewire('user.dashboard.user-footer-dashboard')
    @endif
    <script>
        setTimeout(() => {

            const placeHolders = document.getElementsByClassName('placeholder');
            //console.log(placeHolders)
            //console.log(placeHolders.length)

            for (let i = 0; i <= placeHolders.length; i++) {
                const placeHolder = placeHolders[i];
                console.log(placeHolder);
                console.log(i);
                console.log(placeHolders.length);
                placeHolder.classList.remove('placeholder');
            }


            const numbers = [1, 2, 3, 4, 5];

            numbers.forEach(function(number) {
                console.log(number);
            });
        }, 2000);

    </script>
@endsection

