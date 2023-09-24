<div>
    <div class="card m-b-30">
        <div class="card-header">
            <div class="row">
                <div class="col-10">{{ $name }}</div>
                <div class="col-2">
                    <button class="btn btn-primary" wire:click="status_index()">بازگشت</button>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="col-8">
                    <label for="name">نام اسلایدشو</label>
                    <input type="text" class="form-control" id="name" name="name" wire:model.blur="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col">
                    <label for="slug">نام یکتا</label>
                    <input type="text" class="form-control" id="slug" name="slug" wire:model.blur="slug">
                    @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

            </div>

        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <div class="row">
                <div class="col-9">تصاویر اسلایدشو</div>

            </div>
        </div>
        @foreach($pics as $pic)
            @livewire('admin.runy-slider.slider-edit-pic' , ['pic'=>$pic] , key($pic->id))
        @endforeach
    </div>

    @livewire('admin.runy-slider.add-pic' , ['slider_id'=>$slider_id] , key(time().$slider_id) )
</div>
