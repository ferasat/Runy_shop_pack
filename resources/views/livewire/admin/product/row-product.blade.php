<div class="row ">
    <div class="col-md-2 col-sm-12">
        @if($product->pic == null)
            <img src="{{asset('img/profile/profile-6.jpg')}}" class="img-thumbnail" alt="{{ $product->name }}">
        @else
            <img src="{{asset($product->pic)}}" class="img-thumbnail" alt="{{ $product->name }}">
        @endif
    </div>
    <div class="col-md-10">
        <div class="card-body d-flex pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between row">
            <div class="col-md-5 d-flex flex-column">
                <div>{{ $product->name }}</div>
                <div class="text-small text-muted">{{ statusProduct($product->statusPublish) }} در {{ verta($product->created_at)->format('%d %B %Y , H:i')  }} - {{ verta($product->created_at)->formatDifference() }}</div>
                <div class="cats smaller-Text mt-1">
                    دستبندی : {!! catsInProLink($product->id) !!}
                </div>

            </div>
            <div class="col-md-7 d-flex justify-content-end">
                <a class="btn btn-outline-primary btn-sm ms-1" href="{{asset('/product/'.$product->slug)}}"
                   target="_blank">دیدن</a>
                <a class="btn btn-outline-warning btn-sm ms-1" href="{{asset('/dashboard/product/edit/'.$product->id)}}"
                   type="button">ویرایش</a>
                <a class="btn btn-outline-secondary btn-sm ms-1" wire:click.privent="cloneProduct({{$product->id}})">رو
                    نوشت</a>
                <a class="btn btn-outline-danger btn-sm ms-1"
                   href="{{ asset('/dashboard/product/delete/'.$product->id) }}" {{--wire:click.privent="deleteProduct({{$product->id}})"--}}>حذف</a>

                <div class="btn btn-outline-info">{{$product->numberView}} تا بازدید</div>

            </div>
        </div>
    </div>
</div>

