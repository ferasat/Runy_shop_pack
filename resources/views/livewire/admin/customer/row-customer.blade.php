<div class="border-bottom border-separator-light mb-2 pb-2">
    <div class="row g-0 sh-6">
        <div class="col-1">
            <img src="{{asset($customer->pic)}}" class="img-thumbnail  sh-6 sw-6" alt="{{ $customer->name }}">
        </div>
        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">
                <div class="d-flex flex-column">
                    <div class="p-2">{{ $customer->name .' '.$customer->family }}</div>
                    <div class="text-small text-muted">
                        {{ $customer->type }}
                    </div>
                </div>
                <div class="d-flex">
                    <a class="btn btn-outline-warning btn-sm ms-1"
                       href="{{asset('/dashboard/customer/show/'.$customer->id)}}" type="button">دیدن</a>
                    <a class="btn btn-outline-secondary btn-sm ms-1"
                       wire:click="cloneCustomer({{$customer->id}})">ارسال پیام</a>
                    <button type="button" class="btn btn-outline-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#delete_{{$customer->id}}">حذف</button>

                    <div class="modal fade" id="delete_{{$customer->id}}" tabindex="-1" role="dialog" aria-hidden="true" wire:ignore>
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span class="modal-title">برای حذف این مورد مطمئن هستید ؟</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">در صورت خذف دیگر در دسترس نخواهد بود</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                    <button class="btn btn-danger" wire:click="delete({{$customer->id}})" > بله مطمئنم</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
