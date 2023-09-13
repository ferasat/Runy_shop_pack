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
                        <img src="{{ asset($post->pic) }}" alt="{{ $post->name }}">
                    </div>
                    <div class="detail-box">
                        <a href="{{ asset('/') }}" title="{{ $post->name }}">
                            {{ $post->name }}
                        </a>
                        <div class="expert_position h6"> <span> 25 خرداد 1402 </span> </div>

                        <p> اساسی ترین مزیت دستگاه حضور و غیاب برای کسب و کار شما ، صرف زمان کمتر جهت ثبت زمان تردد ورود
                            و
                            خروج، ردیابی و پردازش زمان می باشد ...
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="row btn-box ">
        <div class="col-12 text-center">
            <a class="btn btn-outline-primary w-25" href="#">
                مطالب بیشتر در مجله فناوری
            </a>
        </div>

    </div>
</div>
