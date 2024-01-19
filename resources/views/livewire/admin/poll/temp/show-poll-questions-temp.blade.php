<div class="border shadow-sm my-2 p-2">
    <div class="d-flex justify-content-between">
        <div class="d-inline">
            <div class="d-block">نوع سول</div>
            <div class="d-block">{{ $questionTemp->question_type }}</div>
        </div>
        <div class="d-inline">
            <div class="d-block">متن سول</div>
            <div class="d-block">{{ $questionTemp->question_title }}</div>
        </div>
        <div class="d-inline">
            <button wire:click="deleteQuestion" class="btn btn-outline-primary">حذف کردن سوال</button>
        </div>
    </div>
    @if($questionTemp->question_type!="text")
        <div class="row">
            <div class="col-md-6">
                <label for="answer_name" class="form-label">جواب</label>
                <input type="text" class="form-control" wire:model.blur="answer_title" id="answer_title">
                @error('answer_title')<span class="text-danger">عنوان جواب را لطفا وارد کنید</span>  @enderror

            </div>
            <div class="col-md-3">
                <label for="answer_name"  class="text-white d-block">.</label>
                <button class="btn btn-runy-primary" wire:click="addAnswer()">+</button>
            </div>

        </div>


        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    @php $x=1 ; @endphp
                    @foreach($answersTempFeilds as $answersTempFeild)
                        <li class="list-group-item">{{ $x .'-> '. show_answer($answersTempFeild->poll_type_answer_field_id)->answer_title }}</li>
                        @php $x++ ; @endphp
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
