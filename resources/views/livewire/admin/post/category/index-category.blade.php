<div class="">
    <div class=" d-flex justify-content-between">
        <div class="card-body">
            <p class="mb-0">{{$description}} .</p>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-4 mb-5">
            <div class="card ">
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">عنوان</label>
                        <input type="text" class="form-control" wire:model.lazy="name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">نامک</label>
                        <input type="text" class="form-control" wire:model.lazy="slug">
                        @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    {{--<div class="mb-3">
                        <label for="editor" class="form-label">متن</label>
                        <div class="form-control editor" id="editor" wire:model.lazy="texts" wire.ignore="texts"></div>
                        @error('texts') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>--}}


                </div>
            </div>
            <div class="card mt-5">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">عنوان سئو</label>
                        <input type="text" class="form-control" wire:model.lazy="titleSeo">
                        @error('titleSeo') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">کلمه کانونی</label>
                        <input type="text" class="form-control" wire:model.lazy="focusKeyword">
                        @error('focusKeyword') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3 text-center" >
                        <button class="btn btn-outline-success w-75" wire:click.privent="save()" @if($disableBtn) disabled @endif>ذخیره</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-8 mb-5">
            @foreach($cats as $cat)
            <div class="card my-3">
                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <div class="d-inline-block">{{ $cat->name }} </div>
                        <div class="d-inline-block">
                            <button class="btn btn-danger" wire:click.privent="deleteCat({{$cat->id}})" @if($disableBtn) disabled @endif>
                                حذف
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{--<script>
    $('#editor').summernote({
        placeholder: 'سلام به رانی خوش آمدید',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>--}}
