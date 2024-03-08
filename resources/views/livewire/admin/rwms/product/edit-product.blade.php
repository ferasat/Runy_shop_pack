<div class="row g-3">
    <div class="col-md-4 col-lg-3 col-sm-12">

        <label class="visually-hidden" for="name">نام</label>
        <div class="input-group mb-2">
            <div class="input-group-text">نام</div>
            <input type="text" class="form-control" id="name{{ $product->id }}" wire:model="name">
        </div>
        <label class="visually-hidden" for="name">کدکالا</label>
        <div class="input-group">
            <div class="input-group-text">کدکالا</div>
            <input type="text" class="form-control" id="code{{ $product->id }}" value="{{ $product->id }}" disabled>
        </div>

    </div>
    <div class="col-md-6">
        <img src="{{ asset($product->pic) }}" class="w-100px rounded p-1">
        <label for="pic" class="form-label">تصویر</label>
        <input type="file" wire:model="pic" class="form-control">
    </div>
    <div class="col-md-6">
        <label for="category" class="form-label">دستبندی</label>
        <select class="form-control" id="category{{ $product->id }}" wire:model="category_id">
            @foreach($cats as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label for="wm_id" class="form-label">انبار</label>
        <select class="form-control" id="wm_id{{ $product->id }}" wire:model="wm_id">
            @foreach($wms as $wm)
                <option value="{{ $wm->id }}">{{ $wm->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label for="price" class="form-label">قیمت</label>
        <input type="text" class="form-control" id="price{{ $product->id }}" wire:model="price">
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header">موجودی:</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="">موجودی فعلی :</div>
                        <input type="text" class="form-control" id="input_stock{{ $product->id }}"
                               wire:model="input_stock" disabled>
                        جهت کاهش موجودی فعلی از میان سریال هایی که در وضعیت <span
                            class="badge text-warning">فروش نرفته</span> هستند ، می توانید حذف کنید
                    </div>
                    <div class="col-md-6">
                        <div class="">موجودی جدید که اضافه شده است</div>
                        <input type="text" class="form-control" id="input_stock{{ $product->id }}"
                               wire:model="input_stock_add">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <label for="texts" class="form-label">شرح</label>
        <input type="text" class="form-control" id="texts{{ $product->id }}" placeholder="شرح اختیاری"
               wire:model="texts">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">ذخیره</button>
    </div>

    <div class="col-12">
        <label for="texts" class="form-label">سریال های تولید شده</label>
        <div class="row">
            @foreach($serials as $serial)
                <div class="col-md-2 col-sm-4 col-lg-2 text-center mt-3" id="{{ $product->id.$serial->id }}">
                    <div class="card">
                        <div class="card-header">
                            @if($serial->status == 'فروش رفت')
                                <span class="badge bg-success rounded">{{ $serial->status }}</span>
                            @elseif($serial->status == 'بازگشت')
                                <span class="badge bg-danger rounded">{{ $serial->status }}</span>
                            @else
                                <span class="badge bg-warning rounded text-black">{{ $serial->status }}</span>
                            @endif
                        </div>
                        <div class="card-body">
                            <div
                                class="border rounded @if($serial->status == 'فروش رفت') border-success @elseif($serial->status == 'بازگشت') border-danger @else border-warning @endif">{!! QrCode::size(100)->generate($serial->serial); !!}</div>
                            <div class="">{{ $serial->serial }}</div>

                        </div>
                        <div class="card-footer">
                            <span>تغییر وضعیت دستی :</span><br>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles">
                                <button type="button" class="btn btn-warning text-"
                                        wire:click.prevent="changeStatusSerial('فروش نرفته' , {{$serial->id}})">فروش
                                    نرفته
                                </button>
                                <button type="button" class="btn btn-success  text-small"
                                        wire:click.prevent="changeStatusSerial('فروش رفت' , {{$serial->id}})">فروش رفت
                                </button>
                                <button type="button" class="btn btn-danger  text-small"
                                        wire:click.prevent="changeStatusSerial('بازگشت' , {{$serial->id}})">بازگشت
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            @endforeach
        </div>
    </div>

</div>
