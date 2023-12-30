<!-- header -->
<header class="main-header-cp">
    <nav class="navbar navbar-expand-lg bg-runy-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ asset(route('dashboard')) }}">
                <img src="{{ asset('theme/img/logo.png') }}" alt="رانی شاپ" class="w-50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainMenuCp" aria-controls="navbarMainMenuCp" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMainMenuCp">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="{{ asset('dashboard') }}">
                            <svg class="icon-svg-panel" viewBox="-3.6 -3.6 31.20 31.20" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-3.6" y="-3.6" width="31.20" height="31.20" rx="15.6" fill="#ffffff" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.34" d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="#6c429a" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="#6c429a" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.34" d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="#6c429a" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="#6c429a" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            پیشخوان</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ asset(route('product.index')) }}">محصولات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ asset(route('service.index')) }}">خدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('post.index'))}}">نوشته ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('page.index'))}}"> برگه ها</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('poll.index'))}}">نظرسنجی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('customer.index'))}}">باشگاه مشتریان</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('setting.index'))}}">تنظیمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('sliderB5.index'))}}">اسلایدشو</a>
                    </li>

                </ul>
                <div class="d-flex" >
                    <div class="dropdown custom-dropdown">
                        <a href="#" data-toggle="dropdown" class="d-flex align-items-center dropdown-link text-left" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true"  data-offset="0, 20">

                            <div class="profile-info">
                                <h3 class="text-white">{{ fullName(\Illuminate\Support\Facades\Auth::id()) }}</h3>
                                <span class="text-white">{{ semat(\Illuminate\Support\Facades\Auth::user()->levelUser) }}</span>
                            </div>
                            <div class="profile-pic mr-3">
                                <img src="{{ asset(Auth::user()->pic) }}" alt="کاربر">
                            </div>

                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >

                            <a class="dropdown-item" href="#"> <span class="icon icon-dashboard"></span> پروفایل</a>
                            <a class="dropdown-item" href="#"><span class="icon icon-mail_outline"></span>Inbox <span class="number">3</span></a>
                            <a class="dropdown-item" href="{{ asset('/dashboard/users') }}"><span class="icon icon-people"></span>مدیریت کاربران</a>
                            <a class="dropdown-item" href="#"><span class="icon icon-cog"></span>Setting<span>New</span></a>
                            <a class="dropdown-item" href="{{ asset(route('logs.index')) }}"><span class="icon icon-cog"></span>لاگ ها</a>
                            <a class="dropdown-item" href="#"><span class="icon icon-sign-out"></span>Log out</a>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </nav>
</header>
<!-- header -->
