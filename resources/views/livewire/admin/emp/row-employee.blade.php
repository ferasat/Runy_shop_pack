<div class="border-bottom border-separator-light mb-2 pb-2">
    <div class="row g-0 sh-6">
        <div class="col-auto">
            <img src="{{asset('img/profile/profile-11.jpg')}}" class="card-img  sh-6 sw-6" alt="{{ $employee->name }}">
        </div>
        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">
                <div class="d-flex flex-column">
                    <div>{{ $employee->name.' '.$employee->family }}</div>
                    <div class="text-small text-muted">{{ role_name($employee->role) }}</div>
                </div>
                <div class="d-flex">

                    <button type="button" wire:click="call_edit_user({{$employee}})" class="btn btn-outline-warning btn-sm ms-1" {{--data-bs-toggle="modal" data-bs-target="#edit_{{$employee->id}}"--}}>ویرایش</button>


                    <a class="btn btn-outline-secondary btn-sm ms-1">ارسال پیام</a>

                    <button type="button" class="btn btn-outline-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#delete_{{$employee->id}}">حذف</button>

                    <div class="modal fade" id="delete_{{$employee->id}}" tabindex="-1" role="dialog" aria-hidden="true" wire:ignore>
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">برای حذف این مورد مطمئن هستید ؟</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                @if($showMessage)
                                    {{ $message_result }}
                                @else
                                <div class="modal-body">در صورت خذف دیگر در دسترس نخواهد بود</div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                    <button class="btn btn-danger" wire:click="delete({{$employee->id}})" > بله مطمئنم</button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
