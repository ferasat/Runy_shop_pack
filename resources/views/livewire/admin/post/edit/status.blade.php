<div class="card">
    <div class="card-header">وضعیت</div>
    <div class="card-body">
        <label class="visually-hidden" for="autoSizingStatus">وضعیت انتشار</label>
        <div class="input-group">
            <div for="statusPublish" class="input-group-text">وضعیت انتشار</div>
            <select id="statusPublish" wire:model.live.blur="statusPublish" class="form-select"
                    aria-hidden="true">
                <option value="forCheck">برای بررسی</option>
                <option value="draft">پیش نویس</option>
                <option value="publish">انتشار</option>
            </select>
        </div>
    </div>
    @if($post->typePost == 'post')
    <div class="card-body">
        <label class="visually-hidden" for="autoSizingStatus">نوع نوشته</label>
        <div class="input-group">
            <div for="statusPublish" class="input-group-text">نوع نوشته</div>
            <select id="statusPublish" wire:model.live.blur="typePost" class="form-select">
                <option value="post">نوشته</option>
                <option value="portfolio">نمونه کار</option>
            </select>
        </div>
    </div>
    <div class="card-body">
        <label class="visually-hidden" for="autoSizingStatus">ویژه</label>
        <div class="input-group">
            <div for="specialPin" class="input-group-text">ویژه شود؟</div>
            <select id="specialPin" wire:model.live.blur="specialPin" class="form-select">
                <option value="0">خیر</option>
                <option value="1">بله</option>
            </select>
        </div>
    </div>
    @endif
    <div class="card-body">
        <label class="visually-hidden" for="formatPost">ساختار نوشته</label>
        <div class="input-group">
            <div for="formatPost" class="input-group-text">ساختار نوشته</div>
            <select id="formatPost" wire:model.live.blur="formatPost" class="form-select">
                <option value="text">متنی</option>
                <option value="gallery">گالری عکس</option>
                <option value="dl-video">دانلود ویدئو</option>
                <option value="video">ویدئویی</option>
                <option value="dl-file">دانلود فایل</option>
            </select>
        </div>
    </div>

    @if($formatPost == 'dl-file')
        <div class="card-body ">

            <div class="haveFiles border p-2 rounded">
                <div class="card-title">فایل ها :</div>
            @if(count($files) > 0)
                <ul class="list-group">
                    @foreach($files as $file)
                        <li class="list-item border-bottom d-flex justify-content-between">
                            <a target="_blank" href="{{ asset($file->path) }}">{{ $file->filename }}</a>
                            <button class="btn" wire:click.prevent="deleteFile({{ $file->id }})"><svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#f43434" stroke-width="1.5" stroke-linecap="round"></path> <path d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8" stroke="#f43434" stroke-width="1.5" stroke-linecap="round"></path> </g></svg></button>
                        </li>
                    @endforeach
                </ul>
            @else
                هیچ فایلی بارگزاری نشده
            @endif
            </div>
            <div class="uploadFiles my-4 border p-2 rounded">
                <h4>بارگذاری فایل :</h4>
                <label class="visually-hidden" for="file_name">نام فایل</label>
                <div class="input-group mb-2">
                    <div for="file_name" class="input-group-text">نام فایل </div>
                    <input type="text" id="file_name" wire:model.live.blur="file_name" class="form-control" @if($disableFilds == true) disabled @endif>
                </div>
                <label class="visually-hidden" for="file_size">اندازه فایل</label>
                <div class="input-group mb-2">
                    <div for="file_size" class="input-group-text">اندازه فایل </div>
                    <input type="text" id="file_size" wire:model.live.blur="file_size" class="form-control" @if($disableFilds == true) disabled @endif>
                </div>
                <label class="visually-hidden" for="file_address">آدرس فایل</label>
                <div class="input-group mb-2">
                    <div for="file_address" class="input-group-text">آدرس فایل </div>
                    <input type="text" id="file_address" wire:model.live.blur="file_address" class="form-control" @if($disableFilds == true) disabled @endif>
                </div>
                <p>جهت بارگذاری فایل به بخش <strong><a href="">مدیریت فایل</a></strong> یا به سایت <strong><a class="text-danger"
                            href="https://www.uplooder.net/" target="_blank">Uplooder</a></strong> بروید و آدرس فایل را در اینجا قرار دهید .</p>
            <button wire:click.prevent="saveFile" class="btn btn-info" @if($disableFilds == true) disabled @endif>بارگذاری فایل</button>
            </div>
        </div>
    @endif

    <div class="card-footer">
        <button class="btn btn-primary" type="submit">ذخیره کن</button>
    </div>
</div>
