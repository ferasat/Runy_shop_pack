<div class="container-fluid p-0">
    <div class="row">
        <div id="carouselHomePage" class="carousel slide">
            <div class="carousel-indicators">
                @php $x=0; @endphp
                @foreach($pics as $pic)
                    <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="{{ $x }}"
                            @if($x == 1 ) class="active" @endif
                            aria-current="true" aria-label="Slide {{ $x++ }}"></button>

                @endforeach
            </div>
            <div class="carousel-inner">
                @php $y=0; @endphp
                @foreach($pics as $pic)
                    <div class="carousel-item @if($y == 0) active @endif ">
                        <img src="{{ asset($pic->urlpic) }}" class="d-block w-100" alt="{{ $pic->name }}">
                        <div class="carousel-caption d-none d-md-block">
                            {{$pic->text}}
                        </div>
                    </div>
                    @php $y++ @endphp
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomePage" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">قبلی</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHomePage" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">بعدی</span>
            </button>
        </div>
        <!-- =======End slider ======= -->
    </div>
</div>
