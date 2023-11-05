<div class="col-12 col-lg-12 mb-5">
    <div class="card">
        <div class="card-header">تنظیمات صفحه اول</div>
        <div class="card-body my-2 d-flex justify-content-center">
            <div class="col-5 position-relative">
                <div class="input-group mb-3">
                    <strong class="input-group-text">
                        <svg viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icon-svg-panel-sm iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#9266CC" d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z"></path><path d="M5.717 9.156c0-1.55.992-2.418 2.325-2.418s2.325.868 2.325 2.418v17.611c0 1.551-.992 2.418-2.325 2.418s-2.325-.867-2.325-2.418V9.156zm7.44.156c0-1.427.992-2.388 2.387-2.388h5.148c6.945 0 10.914 4.465 10.914 11.348C31.605 24.783 27.389 29 21.001 29h-5.395c-1.023 0-2.449-.559-2.449-2.325V9.312zm4.65 15.409h3.132c4 0 5.828-2.945 5.828-6.666c0-3.969-1.859-6.852-6.139-6.852h-2.822v13.518z" fill="#FFF"></path></g></svg>
                        اسلایدر صفحه اول <span class="small">(شناسه اسلایدر را وارد کنید)</span></strong>
                    <input type="text" class="form-control" wire:model.live.blur="slideshow_id">
                </div>
                <div class="d-block ">
                    <div class="text-danger">{{ session('status') }}</div>
                </div>
                <div class="loading-box @if($loadingBox) d-block @else d-none @endif">
                    <svg class="icon-svg-loading icon-svg-panel-lg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17.6566 12H21M3 12H6.34315M12 6.34342L12 3M12 21L12 17.6569" stroke="#673AB7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16 8.00025L18.3642 5.63611M5.63629 18.364L8.00025 16M8.00022 8.00025L5.63608 5.63611M18.364 18.364L16 16" stroke="#0095FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div class="card-title">تنظیمات کدی صفحه اول</div>
            <div class="table-responsive">
                <table class="table caption-top">
                    <thead>
                    <tr>
                        <th scope="col">نامک</th>
                        <th scope="col">نام</th>
                        <th scope="col">بارگذاری خودکار</th>
                        <th scope="col">مقدار</th>
                        <th scope="col">عملیات</th>
                    </tr>
                    </thead>
                    <tbody wire:init="loadItems">
                    @foreach($settings as $setting)
                        @livewire('admin.setting.home-setting-items' , ['setting'=>$setting] , key($setting->id))
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8"></div>
                <div class="col-2">
                    <button type="button" class="btn btn-danger" wire:click="save()">
                        اضافه کردن
                    </button>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="name" class="form-label"> نامک slug (به انگلیسی وارد شود برای برنامه نویس) </label>
                    <input type="text" class="form-control" id="name" wire:model.live.blur="name">
                    @error('name')
                    <div class="form-text">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label for="name_text" class="form-label"> نام (به فارسی وارد شود) </label>
                    <input type="text" class="form-control" id="name_text" wire:model.live.blur="name_text">
                    @error('name_text')
                    <div class="form-text">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label for="texts" class="form-label"> مقدار ( می توانید HTML وارد کنید) </label>
                    <textarea type="text" class="form-control " dir="ltr" id="texts"
                              wire:model.live.blur="value"></textarea>
                    @error('value')
                    <div class="form-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>


        </div>
    </div>
</div>
<script>

    document.addEventListener('livewire:init', () => {

        Livewire.onPageExpired((response, message) => {
        })

    })

</script>
