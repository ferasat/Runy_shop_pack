<div class="col-12 col-lg-12 mb-5">
    <div class="card">
        <div class="card-header">تنظیمات صفحه اول</div>
        <div class="card-body">
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
                    <button type="button" class="btn btn-danger" wire:click.privent="save()">
                        اضافه کردن
                    </button>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="name" class="form-label"> نامک slug (به انگلیسی وارد شود برای برنامه نویس) </label>
                    <input type="text" class="form-control" id="name" wire:model.blur="name">
                    @error('name')
                    <div class="form-text">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label for="name_text" class="form-label"> نام (به فارسی وارد شود) </label>
                    <input type="text" class="form-control" id="name_text" wire:model.blur="name_text">
                    @error('name_text')
                    <div class="form-text">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label for="texts" class="form-label"> مقدار ( می توانید HTML وارد کنید) </label>
                    <textarea type="text" class="form-control text-lg-start" dir="ltr" id="texts" wire:model.blur="value"></textarea>
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
