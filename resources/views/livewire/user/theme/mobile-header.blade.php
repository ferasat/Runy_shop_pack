<header class="mobile_header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand " href="{{ asset('/') }}">
                <img class="w-70px" src="{{ asset(setting_site()->site_logo) }}" alt="{{ setting_site()->site_name }}">
            </a>

            <!-- Button trigger modal -->
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#menuManiModal">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="collapse navbar-collapse" id="navbarMobailHeader">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ asset('/') }}">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/shop') }}">فروشگاه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">سامانه تعمیرات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/blog') }}">مجله فناوری</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
