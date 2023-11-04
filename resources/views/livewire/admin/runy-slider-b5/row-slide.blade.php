<div class="row ">
    <div class="col-md-2 col-sm-12">
        @if($slide->pic == null)
            <img src="{{asset('img/profile/profile-6.jpg')}}" class="img-thumbnail" alt="{{ $slide->name }}">
        @else
            <img src="{{asset($slide->pic)}}" class="img-thumbnail" alt="{{ $slide->name }}">
        @endif
    </div>
    <div class="col-md-10">
        <div class="card-body d-flex pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between row">
            <div class="col-md-5 d-flex flex-column">
                <div>{{ $slide->name }}</div>
                <div class="text-small text-muted">{{ statusProduct($slide->statusPublish) }}</div>
            </div>
            <div class="col-md-7 d-flex justify-content-end">

                <a class="btn btn-outline-warning btn-sm ms-1" href="{{asset('/dashboard/runy-slider/edit/'.$slide->id)}}"
                   type="button">ویرایش</a>
                <a class="btn btn-outline-secondary btn-sm ms-1" wire:click="cloneProduct({{$slide->id}})">رو
                    نوشت</a>
                <a class="btn btn-outline-danger btn-sm ms-1"
                   href="{{ asset('/dashboard/product/delete/'.$slide->id) }}" {{--wire:click.privent="deleteProduct({{$slide->id}})"--}}>حذف</a>

            </div>
        </div>
    </div>
</div>
