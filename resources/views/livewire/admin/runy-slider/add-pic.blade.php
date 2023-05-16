<form class="card m-b-30" method="post" action="{{ asset(route('uploadFile.slider')) }}" enctype="multipart/form-data">
    <div class="card-header">
        <div class="row">
            <div class="col-9">اضافه کردن تصویر</div>
            <div class="col-3 text-center">
                <button  class="btn btn-primary waves-effect waves-light w-50">
                    اضافه کن
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row g-2" >
            @csrf
            <input type="hidden" name="slider_id" value="{{ $slider_id }}">
            <div class="col-2">
                <label for="new_name_pic">عنوان تصویر</label>
                <input type="text" class="form-control" id="new_name_pic" name="new_name_pic" wire:model="new_name_pic">
            </div>
            <div class="col-md-3">
                <label for="new_text_pic">متن روی تصویر</label>
                <input type="text" class="form-control" id="new_text_pic" name="new_text_pic" wire:model="new_text_pic">
            </div>
            <div class="col-md-2">
                <label for="new_link_pic">لینک تصویر</label>
                <input type="text" class="form-control" id="new_link_pic" name="new_link_pic" wire:model="new_link_pic">
            </div>
            <div class="col-md-2">
                <label for="" class="d-block">بارگذاری</label>
                <div class="input-group mb-3">

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="new_file_pic" id="new_file_pic" wire:model="new_file_pic">
                        <label class="custom-file-label" for="new_file_pic"
                               aria-describedby="urlpicAddon">انتخاب تصویر</label>
                    </div>
                    @error('new_file_pic') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="col-md-3">
                @if(isset($new_file_pic))
                    <img class="w-100" src="{{ $new_file_pic->temporaryUrl() }}" alt="" >
                @endif
            </div>

        </div>


    </div>
</form>
