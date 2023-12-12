<div class="position-sticky pt-2" >
    <div class="p-4 mb-3 bg-body-tertiary rounded">

        <h4 class="fst-italic">نکته</h4>
        <p class="mb-0">جهت تایید و رزرو نهایی با با شما تماس گرفته می شود .
            <br>
            تلفن مرکز : <a href="tel:"></a>
            .</p>
    </div>

    <div>
        <h4 class="fst-italic">خدمات ما</h4>
        <ul class="list-unstyled">
            @foreach($services as $service)
                <li>
                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="{{ asset('/service/'.$service->slug) }}">
                        <img class="bd-placeholder-img" width="153" height="96" src="{{ asset($service->pic) }}" alt="{{ $service->name }}">
                        <div class="col-lg-8">
                            <h6 class="mb-0" title="{{ $service->name }}">{{ $service->name }}</h6>
                            <small class="text-body-secondary">{{ verta($service->updated_at)->format('%d %B %Y') }}</small>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</div>
