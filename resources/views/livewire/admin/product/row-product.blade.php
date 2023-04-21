<div class="border-bottom border-separator-light mb-2 pb-2">
    <div class="row g-0 sh-6">
        <div class="col-1">
            @if($product->pic == null)
                <img src="{{asset('img/profile/profile-6.jpg')}}" class="img-thumbnail" alt="{{ $product->name }}">
            @else
                <img src="{{asset($product->pic)}}" class="img-thumbnail" alt="{{ $product->name }}">
            @endif
        </div>
        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">
                <div class="d-flex flex-column">
                    <div>{{ $product->name }}</div>
                    <div class="text-small text-muted">{{ statusProduct($product->statusPublish) }}</div>
                </div>
                <div class="d-flex">
                    <a class="btn btn-outline-warning btn-sm ms-1" href="{{asset('/dashboard/product/edit/'.$product->id)}}" type="button">ویرایش</a>
                    <a class="btn btn-outline-secondary btn-sm ms-1" wire:click.privent="cloneProduct({{$product->id}})">رو نوشت</a>
                    <a class="btn btn-outline-danger btn-sm ms-1" href="{{ asset('/dashboard/product/delete/'.$product->id) }}" {{--wire:click.privent="deleteProduct({{$product->id}})"--}}>حذف</a>

                </div>
            </div>
        </div>
    </div>
</div>
