<nav class="navbar direction-ltr fixed-top header-responsive">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="#pablo">
                <img src="{{ asset('theme/img/logo.png') }}" height="24px" alt="runy">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
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

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div class="logo-nav-res default text-center">
                <a href="#">
                    <img src="{{ asset('theme/img/logo.png') }}" height="36px" alt="runy">
                </a>
            </div>
            <ul class="navbar-nav default">

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
            </ul>
        </div>
    </div>
</nav>
