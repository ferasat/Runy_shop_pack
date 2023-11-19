<div class="row">
    <div class="col-md-8 mb-5">
        <section class="scroll-section" id="listPost">

            <div class="card mb-3 border-color-runy-primary">
                <div class="card-header border-color-runy-primary">
                    <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16.2 6a1 1 0 0 1 1-1c.637 0 1.262.128 1.871.372.663.265 1.173.658 1.636 1.12.463.464.856.974 1.121 1.637.244.609.372 1.234.372 1.871s-.128 1.262-.372 1.871c-.261.655-.648 1.16-1.104 1.619l-.984 1.083a.967.967 0 0 1-.033.034l-3.2 3.2c-.463.463-.973.856-1.636 1.122A5.012 5.012 0 0 1 13 19.3a5.012 5.012 0 0 1-1.871-.372c-.663-.265-1.173-.658-1.636-1.12-.463-.464-.856-.974-1.121-1.637A5.145 5.145 0 0 1 8 14.2c0-.637.128-1.262.372-1.871.265-.663.658-1.173 1.12-1.636l1.1-1.1a1 1 0 1 1 1.415 1.414l-1.1 1.1c-.337.337-.544.627-.678.964A3.014 3.014 0 0 0 10 14.2c0 .476.077.85.229 1.229.134.337.341.627.678.964.337.337.627.544.964.678.391.157.766.229 1.129.229s.738-.072 1.129-.229c.337-.134.627-.341.964-.678l3.183-3.183.984-1.083a.967.967 0 0 1 .033-.034c.337-.337.544-.627.678-.964.157-.391.229-.766.229-1.129s-.072-.738-.229-1.129c-.134-.337-.341-.627-.678-.964-.337-.337-.627-.544-.964-.679A3.014 3.014 0 0 0 17.2 7a1 1 0 0 1-1-1zm-4.9 1.5c-.363 0-.738.072-1.129.228-.337.135-.627.342-.964.68L5.924 11.69l-.984 1.083-.033.034c-.337.337-.544.627-.679.964A3.014 3.014 0 0 0 4 14.9c0 .363.072.738.228 1.129.135.337.342.627.68.964.336.337.626.544.963.679.391.156.766.228 1.129.228a1 1 0 1 1 0 2 5.011 5.011 0 0 1-1.871-.371c-.663-.266-1.173-.659-1.636-1.122-.463-.463-.856-.973-1.121-1.636A5.012 5.012 0 0 1 2 14.9c0-.637.128-1.262.372-1.871.261-.655.648-1.16 1.104-1.619l.984-1.083.033-.034 3.3-3.3c.463-.463.973-.856 1.636-1.121A5.012 5.012 0 0 1 11.3 5.5c.637 0 1.262.128 1.871.372.663.265 1.173.658 1.636 1.12.463.464.856.974 1.121 1.637.244.609.372 1.234.372 1.871s-.128 1.262-.372 1.871c-.262.655-.649 1.162-1.105 1.62l-1.086 1.185a1 1 0 0 1-1.474-1.352l1.1-1.2.03-.031c.337-.337.544-.627.678-.964.157-.391.229-.766.229-1.129s-.072-.738-.229-1.129c-.134-.337-.341-.627-.678-.964-.337-.337-.627-.544-.964-.679A3.014 3.014 0 0 0 11.3 7.5z" fill="#6c429a"></path></g></svg>
                    عنوان
                </div>
                <div class="card-body mb-n2 border-last-none h-100">
                    <div class="mb-3">
                        <label class="form-label">عنوان نظرسنجی</label>
                        <input type="text" class="form-control border-color-runy-primary" wire:model.blur="subject">
                        @error('subject') {{$message}} @enderror
                    </div>

                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">اطلاعات نظرسنجی</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <label for="poll_type" class="form-label">نوع نظرسنجی</label>
                            <select class="form-control" wire:model.live.blur="poll_type">
                                <option value="single_choice">تک انتخابی</option>
                                <option value="multiple_choice">چند انتخابی</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <label class="form-label">سوال</label>
                            <input type="text" class="form-control border-color-runy-primary" wire:model.blur="title">
                            @error('title') {{$message}} @enderror
                        </div>
                    </div>
                    <div class="row hr mt-3">

                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">گزینه های نظرسنجی</div>
                @php $x=1 ; @endphp
                @foreach($answers as $answer)
                    @livewire('admin.poll.edit.add-answer' , compact('answer' , 'question' , 'x') , key($answer->id.rand(1,999).$x))
                    @php $x++ ; @endphp
                @endforeach
                <div class="card-footer">

                    <button class="btn btn-runy-primary" wire:click="addAnswer()" >
                        <i class="fa fa-plus-circle"></i>
                        اضافه کردن
                    </button>
                    <button class="btn btn-runy-danger" wire:click="removeAnswer()">
                        <i class="fa fa-minus-circle"></i>
                        حذف کردن
                    </button>

                </div>
            </div>


        </section>
    </div>
    <div class="col-md-4 mb-5">
        <div class="card border-color-runy-primary">
            <div class="card-header border-color-runy-primary">
                انتشار
            </div>
            <div class="card-footer text-center border-color-runy-primary">
                <button class="btn btn-runy-primary mb-1" wire:click.prevent="save">ذخیره</button>
            </div>
        </div>

    </div>
</div>
