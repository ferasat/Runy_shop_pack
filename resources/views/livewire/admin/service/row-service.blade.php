<div class="row ">
    <div class="col-md-2 col-sm-12">
        @if($service->pic == null)
            <img src="{{asset('img/profile/profile-6.jpg')}}" class="img-thumbnail" alt="{{ $service->name }}">
        @else
            <img src="{{asset($service->pic)}}" class="img-thumbnail" alt="{{ $service->name }}">
        @endif
    </div>
    <div class="col-md-10">
        <div class="card-body d-flex pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between row">
            <div class="col-md-5 d-flex flex-column">
                <div>{{ $service->name }}</div>
                <div class="text-small text-muted">{{ statusProduct($service->statusPublish) }}</div>
            </div>
            <div class="col-md-7 d-flex justify-content-end">
                <a class="btn btn-outline-primary btn-sm ms-1" href="{{asset('/service/'.$service->slug)}}"
                   target="_blank">دیدن</a>
                <a class="btn btn-outline-warning btn-sm ms-1" href="{{asset('/dashboard/service/edit/'.$service->id)}}"
                   type="button">ویرایش</a>
                <a class="btn btn-outline-secondary btn-sm ms-1" wire:click.privent="cloneProduct({{$service->id}})">رو
                    نوشت</a>
                <a class="btn btn-outline-danger btn-sm ms-1"
                   href="{{ asset('/dashboard/service/delete/'.$service->id) }}" {{--wire:click.privent="deleteProduct({{$service->id}})"--}}>حذف</a>

            </div>
        </div>
    </div>
</div>

