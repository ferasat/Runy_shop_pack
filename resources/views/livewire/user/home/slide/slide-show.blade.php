<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/banner/cta-horizontal-short-1.webp') }}" class="d-block w-100" style="border-radius: var(--border-radius-lg);" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/banner/cta-horizontal-short-2.webp') }}" class="d-block w-100" style="border-radius: var(--border-radius-lg);"  alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/banner/cta-horizontal-short-3.webp') }}" class="d-block w-100" style="border-radius: var(--border-radius-lg);"  alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{--<div class="card sh-45 h-lg-100 position-relative bg-theme">
    <img src="{{ asset('img/banner/pich.jpg') }}" class="card-img h-100 position-absolute theme-filter" alt="card image">

    <div class="card-img-overlay d-flex flex-column justify-content-end bg-transparent">
        <div class="mb-4">
            <div class="cta-1 mb-2 w-75 w-sm-50">Introduction to Cloud</div>
            <div class="w-50 text-alternate">Lollipop chocolate marzipan marshmallow gummi bears. Tootsie roll liquorice cake jelly beans.</div>
        </div>
        <div>
            <a href="" class="btn btn-icon btn-icon-start btn-primary mt-3 stretched-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-chevron-right"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>
                <span>Getting Started</span>
            </a>
        </div>
    </div>
</div>--}}
