<div class="row">
    <div class="col-md-9">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-3">
                    <div class="col item mb-3">
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
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg- mb-5">
            <div class="card-header">تازه ها</div>
            @foreach(recentProducts(5) as $repost)
                <div class="row g-0 sh-10 mt-1">
                    <div class="col-3 col-sm-3 h-100">
                        <img src="{{asset($repost->pic)}}" alt="{{$repost->name}}"
                             class="card-img card-img-horizontal">
                    </div>
                    <div class="col-9 col-sm-9">
                        <div class="d-flex flex-column">
                            <h4 title="{{$repost->name}}"><a class="heading mb-0 pe-2" href="{{asset('post/'.$repost->slug)}}">{{$repost->name}}</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card bg- mb-5">
            <div class="card-header">تازه ها</div>
            @foreach(recentPosts(5) as $repost)
                <div class="row g-0 sh-10 mt-1">
                    <div class="col-3 col-sm-3 h-100">
                        <img src="{{asset($repost->pic)}}" alt="{{$repost->name}}"
                             class="card-img card-img-horizontal">
                    </div>
                    <div class="col-9 col-sm-9">
                        <div class="d-flex flex-column">
                            <h4 title="{{$repost->name}}"><a class="heading mb-0 pe-2" href="{{asset('post/'.$repost->slug)}}">{{$repost->name}}</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
