<nav class="navbar fixed-top bg-body-tertiary direction-ltr header-responsive">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="https://tarahsite.net/">
                <img src="{{ asset('theme/img/logo.png') }}" height="24px" alt="runy">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="search-nav default">
                <form action="">
                    <input type="text" placeholder="جستجو ...">
                    <button type="submit"><img src="{{ asset('theme/img/search.png') }}" alt="runy"></button>
                </form>
                <ul>
                    <li><a href="#"><i class="now-ui-icons users_single-02"></i></a>
                    </li>
                    <li><a href="#"><i class="now-ui-icons shopping_basket"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="logo-nav-res default text-center">
                <a href="https://tarahsite.net/">
                    <img src="{{ asset('theme/img/logo.png') }}" height="36px" alt="runy">
                </a>
            </div>
            <ul class="navbar-nav  me-auto mb-2 mb-lg-0 default">

                <li>
                    <a href="{{ asset('dashboard') }}">پیشخوان</a>
                </li>
                <li>
                    <a href="{{ asset(route('product.index')) }}">محصولات</a>
                </li>
                <li>
                    <a href="{{asset(route('post.index'))}}">نوشته ها</a>
                </li>
                <li>
                    <a href="{{asset(route('page.index'))}}">برگه ها</a>
                </li>
                <li>
                    <a href="{{asset(route('discount.index'))}}">تخفیف ها</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
