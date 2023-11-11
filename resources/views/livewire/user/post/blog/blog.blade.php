<div class="row">
    <div class="col-md-9">
        <div class="row">
            @foreach($posts as $post)
                <div class="card mb-3">
                    <img src="{{ asset($post->pic) }}" class="card-img card-img-top" alt="{{ $post->name }}">
                    <div class="card-body">
                        <h4 class="card-title mb-3">
                            <a href="{{ asset('post/'.$post->slug) }}" class="stretched-link">
                            <span class="overflow-hidden">
                                {{ $post->name }}
                            </span>
                            </a>
                        </h4>
                        <div class="card-text">
                            {!! text_summary($post->texts) !!}
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-outline-primary" href="{{ asset('post/'.$post->slug) }}">اطلاعات بیشتر</a>
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
            <div class="card-header">محصولات</div>
            @foreach(recentProducts(5) as $repost)
                <div class="row g-0 sh-10 mt-1">
                    <div class="col-3 col-sm-3 h-100">
                        <img src="{{asset($repost->pic)}}" alt="{{$repost->name}}"
                             class="card-img card-img-horizontal">
                    </div>
                    <div class="col-9 col-sm-9">
                        <div class="d-flex flex-column">
                            <h4 title="{{$repost->name}}"><a class="heading mb-0 pe-2" href="{{asset('product/'.$repost->slug)}}">{{$repost->name}}</a></h4>
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
