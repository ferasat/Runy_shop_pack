<div class="">
    <div class="row ">
        <div class="col-4">
            <input wire:model="title" class="form-control">
        </div>
        <div class="col-4">
            <select wire:model.live.blur="answer_type" class="form-control" disabled>
                <option value="checkbox">گزینه چند انتخابی (چکباکس)</option>
                <option value="radio">گزینه تک انتخابی (رادیو)</option>
                <option value="textarea">متنی</option>
                <option value="select">انتخابی آبشاری</option>
            </select>
        </div>
        <div class="col-4">

            <button wire:click.prevent="addAnswer()" class="btn btn-outline-warning">
                <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M18.0697 14.4302L11.9997 20.5002L5.92969 14.4302" stroke="#f58f00" stroke-width="1.5"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path opacity="0.4" d="M12 3.5V20.33" stroke="#f58f00" stroke-width="1.5" stroke-miterlimit="10"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                اضافه کردن جواب
            </button>
        </div>
    </div>

    @if($answers == null)
        <div class="row">
            <div class="col-4">جوابی نیست</div>
        </div>
    @else
        @foreach($answers as $answer)
            <div class="d-block border border-color-runy-danger rounded">
            <div class="row"><div class="col-12">جواب {{ $x }}</div></div>
            @livewire('admin.service.create.runy-form-builder-answer-service' , ['answer'=>$answer] , key($answer->id . rand(1,99)))
            @php $x++ @endphp
            </div>
        @endforeach
    @endif

</div>
