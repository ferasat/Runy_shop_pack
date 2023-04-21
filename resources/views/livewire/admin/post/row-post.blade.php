<div class="border-bottom border-separator-light mb-2 pb-2">
    <div class="row g-0 sh-6">
        <div class="col-1">
            @if($post->pic == null)
                <img src="{{asset('img/profile/profile-6.jpg')}}" class="img-thumbnail" alt="thumb">
            @else
                <img src="{{asset($post->pic)}}" class="img-thumbnail" alt="{{ $post->name }}">
            @endif
        </div>
        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">
                <div class="d-flex flex-column">
                    <div>{{ $post->name }}</div>
                    <div class="text-small text-muted">{{ type_name_fa($post->typePost).'|'. statusPost($post->statusPublish) }}</div>
                </div>
                <div class="d-flex">
                    <a class="btn btn-outline-secondary btn-sm ms-1"  href="{{ asset('/dashboard/'.$post->typePost.'/edit/'.$post->id) }}" type="button">ویرایش</a>
                    <a class="btn btn-outline-warning btn-sm ms-1"  href="{{ asset('/dashboard/'.$post->typePost.'/clone/'.$post->id) }}" type="button">رو نوشت</a>
                    <a class="btn btn-outline-danger btn-sm ms-1"  href="{{ asset('/dashboard/'.$post->typePost.'/delete/'.$post->id) }}" type="button">حذف</a>
                    <a class="btn btn-outline-info btn-sm ms-1"  href="{{ setting_site()->site_url.'blog?'.$post->typePost.'='.$post->slug }}" type="button" target="_blank">دیدن</a>
                </div>
            </div>
        </div>
    </div>
</div>
