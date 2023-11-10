<div class="row justify-content-center">
    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="editSlide">

            <div class="card mb-2 shadow border-color-runy-secend">
                <div class="card-header bg-runy-secend">{{ $slide->name }} </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="name" class="form-label">نام اسلایدر</label>
                            <input type="text" class="form-control" id="name" wire:model.live.blur="name"
                                   placeholder="نام اسلایدسشو">
                        </div>
                        <div class="col">
                            <label for="text" class="form-label">یاداشت کوتاه</label>
                            <input type="text" class="form-control" id="text" wire:model.live.blur="text"
                                   placeholder="یاداشت کوتاه">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-2 shadow border-color-runy-secend">
                <div class="card-header bg-runy-secend">تصاویر اسلایدشو</div>
                <div class="card-body justify-content-between">
                    <button class="btn btn-runy-primary" wire:click="addNewPic()">
                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.1" d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 19.4115 19.4115 21 12 21C4.5885 21 3 19.4115 3 12Z" fill="#ffffff"></path> <path d="M9 12H15" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 9L12 15" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 19.4115 19.4115 21 12 21C4.5885 21 3 19.4115 3 12Z" stroke="#ffffff" stroke-width="2"></path> </g></svg>
                        اضافه کردن تصویر
                    </button>
                </div>
                <div class="card-body">
                    @foreach($pics as $pic)
                        @livewire('admin.runy-slider-b5.edit-slide-pic' , ['pic'=>$pic] , key($pic->id.rand(1,999)))
                    @endforeach
                </div>
                <div class="card-footer">

                </div>
            </div>
        </section>
    </div>
</div>
