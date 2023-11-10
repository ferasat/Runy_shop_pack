<div class="container">
    <div class="row section-header ">
        <span>مجله فناوری</span>
        <h5 class="h2">مجله فناوری</h5>
    </div>
    <div class="row">
        <div class=" owl-carousel">

            @foreach($posts as $post)
                <div class="box">
                    <div class="img-box">
                        <a href="{{ asset('post/'.$post->slug) }}" title="{{ $post->name }}">
                        <img src="{{ asset($post->pic) }}" alt="{{ $post->name }}">
                        </a>
                    </div>
                    <div class="detail-box">
                        <a href="{{ asset('post/'.$post->slug) }}" title="{{ $post->name }}">
                            {{ $post->name }}
                        </a>
                        <div class="expert_position h6"> <span>{{ verta($post->updated_at)->format('%d %B %Y') }}</span> </div>

                        <p>
                            {{ text_summary($post->texts) }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="row btn-box ">
        <div class="col-12 text-center">
            <a class="btn btn-outline-primary w-25" href="{{ asset('/blog') }}">
                مطالب بیشتر در مجله فناوری
            </a>
        </div>

    </div>
</div>
