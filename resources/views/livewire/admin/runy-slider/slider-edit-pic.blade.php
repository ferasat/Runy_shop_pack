<div class="card-body" >  {{--Edit Pic--}}
    <div class="row g-2 border-bottom pb-3">
        <div class="col-2">
            <label for="name">عنوان تصویر</label>
            <input type="text" class="form-control" id="name_{{$pic->id}}" name="name" wire:model.live="name">
        </div>
        <div class="col-md-3">
            <label for="text">متن روی تصویر</label>
            <input type="text" class="form-control" id="text_{{$pic->id}}" name="text" wire:model.live="text">
        </div>
        <div class="col-md-2">
            <label for="link">لینک تصویر</label>
            <input type="text" class="form-control" id="link_{{$pic->id}}" name="link" wire:model.live="link">
        </div>

        <div class="col-md-4 text-center">
            @if(isset($new_pic))
                <img style="width: 120px" src="{{ $new_pic->temporaryUrl() }}" >
            @else
                <img style="width: 120px"  src="{{ asset($urlpic) }}" >
            @endif
            <div class="d-block w-100 text-center pt-3">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary " wire:click="save({{$pic->id}})">ذخیره</button>
                    <button type="button" class="btn btn-danger" wire:click="delete({{$pic->id}})">حذف</button>
                </div>
            </div>
        </div>

    </div>
</div>
