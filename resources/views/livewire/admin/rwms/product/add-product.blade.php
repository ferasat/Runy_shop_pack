<div class="text-right">
    <div class="mb-3">
        <label for="name" class="form-label">نام محصول <span class="smaller-Text badge bg-danger rounded">لازم</span></label>
        <input list="names" type="text" class="form-control" id="name" wire:model="name" placeholder="حداقل سه حرف وارد کنید">
        <datalist id="names">
            @foreach($names as $name)
            <option value="{{ $name->name }}">
            @endforeach
        </datalist>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">قیمت محصول</label>
        <input type="number" class="form-control" id="price" wire:model="price" placeholder="1000">
    </div>
    <div class="mb-3">
        <label for="input_stock" class="form-label">تعداد محصول</label>
        <input type="number" class="form-control" id="input_stock" wire:model="input_stock" placeholder="0">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">دستبندی محصول</label>
        <select class="form-control" id="category" wire:model="category">
            <option value="متفرقه">متفرقه</option>
            <option value="متفرقه">متفرقه</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="wm_id" class="form-label">انبار محصول</label>
        <select class="form-control" id="wm_id" wire:model="wm_id">
        @foreach($wms as $wm)
                <option value="{{ $wm->id }}">{{ $wm->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="pic" class="form-label">تصویر محصول</label>
        <input type="file" class="form-control" id="pic" wire:model="pic" >
        @error('pic') <span class="error">{{ $message }}</span> @enderror
        @if ($pic)
            <img class="w-25" src="{{ $pic->temporaryUrl() }}">
        @endif
    </div>
    <div class="mb-3">
        <label for="texts" class="form-label">توضیحات محصول</label>
        <textarea  class="form-control" id="texts" wire:model="texts" placeholder="اختیاری"></textarea>
    </div>
    <div class="mt-3">
        <button class="btn btn-primary" wire:click.prevent="addProduct()">ذخیره</button>
        <ul class="d-block list-group text-danger">
            <li class="list-group-item">@error('name') <span class="error">نام تکراری نباشد . بیشتر از 3 حرف وارد کنید .</span> @enderror</li>
            <li class="list-group-item">@error('pic') <span class="error">{{ $message }}</span> @enderror</li>
        </ul>
    </div>
</div>
