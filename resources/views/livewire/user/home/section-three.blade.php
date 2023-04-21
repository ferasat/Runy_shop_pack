<div class="">
    <h2 class="small-title">مجله</h2>
    <div class="card mb-2">
        <a  class="row g-0 sh-10">
            <div class="col-auto">
                <div class="sw-9 sh-10 d-inline-block d-flex justify-content-center align-items-center">
                    <i data-cs-icon="cupcake" class="text-primary"></i>
                </div>
            </div>
            <div class="col">
                <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                    <div class="d-flex flex-column">
                        <div class="text-alternate">تازهای آموزشی</div>
                        <div class="text-small text-muted">مقلات زیبا رد مورد شلنگ و اتصالات</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="row g-5 mb-5">
        <div class="owl-carousel owl-theme">
            @foreach(recentPosts(10) as $post)
                <div class="col item">
                    <div class="card h-100">
                        <img src="{{ asset($post->pic) }}" class="card-img-top sh-19" alt="card image">
                        <div class="card-body">
                            <h5 class="heading mb-3">
                                <a href="{{ asset('post/'.$post->slug) }}" class="body-link stretched-link">
                            <span class="clamp-line sh-5" data-line="2"
                                  style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
                                {{ $post->name }}
                            </span>
                                </a>
                            </h5>
                            <div>
                                <div class="row g-0">

                                    <div class="col">
                                        <i data-cs-icon="eye" class="text-primary me-1" data-cs-size="15"></i>
                                        <a href="{{ asset('post/'.$post->slug) }}">اطلاعات بیشتر<span
                                                class="align-middle"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
