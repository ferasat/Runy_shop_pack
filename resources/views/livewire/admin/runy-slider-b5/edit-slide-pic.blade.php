<form class="row border rounded p-4 my-2 @if($msgSuc) boarder-success @endif" wire:submit="save">

    <div class="col-md-6">
        <div class="d-block">
            <label for="name" class="form-label">نام تصویر</label>
            <input type="text" class="form-control" id="name" wire:model.live.blur="name"
                   placeholder="نام تصویر نمایش داده می شود">
        </div>
        <div class="d-block mt-2">
            <label for="text" class="form-label">یاداشت کوتاه</label>
            <input type="text" class="form-control" id="text" wire:model.live.blur="text"
                   placeholder="نمایش داده می شود">
        </div>
        <div class="d-block mt-2">
            <label for="link" class="form-label">لینک</label>
            <input type="text" class="form-control" id="link" wire:model.live.blur="link">
        </div>
    </div>
    <div class="col-md-6">
        @if($pic->urlpic != null and $previewPic == null)
            <img class="w-100 img-thumbnail" src="{{ asset($pic->urlpic) }}" alt="{{ $pic->name }}">
        @elseif($previewPic != null)
            <img class="w-100 img-thumbnail" src="{{ $previewPic->temporaryUrl() }}" alt="موقت">
        @else
            <img class="w-100 img-thumbnail" src="{{ asset('theme/img/post.jpg') }}" alt="پیشفرض">
        @endif
        <div class="d-block w-100">
            <input type="file" class="form-control" wire:model.live.blur="previewPic" name="previewPic">
            @error('previewPic') <span class="text-danger">{{ $message }}</span> @enderror
            {{ $previewPic }}
        </div>
    </div>
    <div class="col-12 justify-content-between my-2">
        <button class="btn btn-success" wire:click="save()">ذخیره</button>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModelSlide{{$pic->id}}">
            حذف
        </button>

        <div class="modal fade" id="deleteModelSlide{{$pic->id}}" tabindex="-1" aria-labelledby="deleteModelSlide{{$pic->id}}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModelSlide{{$pic->id}}Label">آیا برای حذف کردن مطمئن هستید ؟</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-between">
                        <button class="btn btn-danger" wire:click="deletePic" data-bs-dismiss="modal" aria-label="Close">بله حذف شود</button>
                        <button class="btn btn-info" data-bs-dismiss="modal" aria-label="Close">خیر منصرف شدم</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-block w-100">
            @if($msgSuc)
            <div class="alert alert-success"> با موفقیت ذخیره شد</div>
            @endif
        </div>
    </div>
</form>
