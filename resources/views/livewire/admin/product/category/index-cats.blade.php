<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">اضافه کردن</div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">نام</label>
                    <input type="text" class="form-control" wire:model.live.blur="name" id="name">
                    @error('name')
                    <div class="text-white bg-danger radius-rounded"> {{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">نامک</label>
                    <input type="text" class="form-control" wire:model.live.blur="slug" id="slug">
                    @error('slug')
                    <div class="text-white bg-danger radius-rounded"> {{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="master_id" class="form-label">سردسته</label>
                    <select id="master_id" class="form-select" wire:model.live.blur="master_id" name="master_id">
                        <option value="0" selected>سردسته</option>
                        @foreach($cats as $cat)
                            <option value="{{ $cat -> id }}"> {{ $cat -> name }} </option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">شرح</label>
                    <textarea class="form-control" wire:model.live.blur="description" id="description"></textarea>
                    @error('description')
                    <div class="text-white bg-danger radius-rounded"> {{ $message }}</div> @enderror
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-outline-success" wire:click.privent="save">ذخیره کن</button>
                @if($showSave == true)
                    <div class="d-block mt-3 bg-success p-3 radius-rounded text-white">ذخیره شد</div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">دسته ها</div>
            <div class="card-body">
                <div class="accordion" id="accordionCat">
                    @foreach($cats as $cat)
                        @if($cat->master_id == 0)
                            <div class="accordion-item">
                                <div class="accordion-header d-flex justify-content-between" id="heading{{ $cat->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $cat->id }}" aria-expanded="false"
                                            aria-controls="collapse{{ $cat->id }}">
                                        <strong class="d-block">{{ $cat->name }} </strong>: ( {{ $cat->slug }} )

                                    </button>
                                    <button class="btn btn-danger btn-sm left-0"
                                            wire:click="deleteCatOnly({{ $cat->id }})">حذف
                                    </button>
                                </div>
                                <div id="collapse{{ $cat->id }}" class="accordion-collapse collapse"
                                     aria-labelledby="heading{{ $cat->id }}" data-bs-parent="#accordionCat">
                                    <div class="accordion-body">
                                        <a target="_blank"
                                           href="{{ asset('/product-category/'.$cat->slug) }}">{{ $cat->name }}</a>
                                        @if(subCats($cat->id) !== null )
                                            <ul class="list-group list-group-flush">
                                                @foreach(subCats($cat->id) as $sCat)
                                                    <li class="list-group-item d-flex  justify-content-between border rounded">
                                                        <div class="d-block-flex gap-1">
                                                            <a data-bs-toggle="collapse" href="#collapse{{$sCat->id}}"
                                                               role="button" aria-expanded="false"
                                                               aria-controls="collapse{{$sCat->id}}">
                                                                {{ $sCat->name }}
                                                            </a>
                                                            <a class="smaller-Text" target="_blank"
                                                               href="{{ asset('/product-category/'.$sCat->slug) }}">نمایش</a>
                                                            <div class="collapse" id="collapse{{$sCat->id}}">
                                                                <div class="card card-body">
                                                                    @foreach(subCats($sCat->id) as $ssCat)
                                                                        <div class="d-flex justify-content-between my-2">
                                                                            {{ $ssCat->name }}
                                                                            <a class="btn smaller-Text" target="_blank"
                                                                               href="{{ asset('/product-category/'.$ssCat->slug) }}">نمایش</a>
                                                                            <button class="btn smaller-Text btn-danger"
                                                                                    wire:click="deleteCatOnly({{ $ssCat->id }})">
                                                                                حذف
                                                                            </button>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-sm btn-danger"
                                                                wire:click="deleteCatOnly({{ $sCat->id }})">حذف
                                                        </button>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
