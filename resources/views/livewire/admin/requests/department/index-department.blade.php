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
                        <input type="text" class="form-control" wire:model.live.blur="name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">نامک</label>
                        <input type="text" class="form-control" wire:model.live.blur="description">
                        @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <div class="mb-3 text-center" >
                        <button class="btn btn-outline-success w-75" @if($disableBtn) disabled @endif wire:click.privent="save()"  >ذخیره</button>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-xl-8 mb-5">
            @foreach($departments as $department)
                <div class="card my-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-around">
                            <div class="d-inline-block">{{ $department->name }} </div>
                            <div class="d-inline-block">
                                <button class="btn btn-danger" wire:click.privent="deleteCat({{$department->id}})" @if($disableBtn) disabled @endif>
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
