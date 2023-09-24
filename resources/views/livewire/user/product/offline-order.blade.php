<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelCloseOut">ثبت سفارش برای: <span>{{$product->name}}</span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    @if($show == true)
    <div class="modal-body  ">
        <section class="scroll-section" id="topLabel">
            <div class="small-title">لطفا اطلاعات خود را وارد کنید</div>
            <div class="card mb-5">
                <div class="card-body">

                    <label class="mb-3 top-label">
                        <input class="form-control" name="name" wire:model.blur="name" />
                        <span>نام</span>
                    </label>
                    <label class="mb-3 top-label">
                        <input class="form-control" name="name"  wire:model.blur="family"/>
                        <span>نام خانوادگی</span>
                    </label>
                    <label class="mb-3 top-label">
                        <input class="form-control" type="number"   wire:model.blur="cell" placeholder="912..."/>
                        <span>شماره تماس</span>
                        @error('cell') <span class="bg-danger p-2 radius-rounded text-white">صفر اول را وارد نکنید</span>@enderror
                    </label>
                    <label class="mb-3 top-label w-100">
                        <input class="form-control" type="number"  wire:model.blur="capacity"/>
                        <span>تعداد</span>
                    </label>

                    <div class="mb-3 top-label">
                        <textarea id="note_customer" class="form-control" rows="2" wire:model.blur="note_customer"></textarea>
                        <label for="note_customer">توضیحات و پیام شما</label>
                        @error('note_customer') <span class="bg-danger p-2 radius-rounded text-white">متن پیام خیلی بلند هست کوتاه تر کنید</span>@enderror
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div class="modal-footer  ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
        <button type="button" class="btn btn-primary" wire:click.privent="save">ثبت کن</button>
    </div>
    @endif
    @if($show == false)
    <div class="modal-body ">
            <div class="card mb-5">
                <div class="card-body">
                    {{$success}}  سفارش شما به شماره
                </div>
            </div>
    </div>
    @endif
</div>
