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
                        <a class="nav-link text-white active" aria-current="page" href="{{ asset('dashboard') }}">پیشخوان</a>
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
                        <a class="nav-link text-white" href="{{asset(route('discount.index'))}}">تخفیف ها</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('poll.index'))}}">نظرسنجی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('discount.index'))}}">باشگاه مشرتریان</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('setting.index'))}}">تنظیمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{asset(route('sliderB5.index'))}}">اسلایدشو</a>
                    </li>

                </ul>
                <div class="d-flex" >
                    <div class="btn-group dropstart">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ fullName(\Illuminate\Support\Facades\Auth::id()) }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">پروفایل</a></li>
                            <li><a class="dropdown-item" href="#">اعتبار</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">تنظیمات درگاه</a></li>
                            <li><a class="dropdown-item" href="{{ asset('/dashboard/users') }}">مدیریت کاربران</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- header -->
