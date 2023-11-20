<div class="border shadow-sm my-2 p-2">
    <div class="d-flex justify-content-between">
        <div class="d-inline">
            <div class="d-block">نوع سول</div>
            <div class="d-block">{{ get_question_type($question->question_type) }}</div>
        </div>
        <div class="d-inline">
            <div class="d-block">متن سول</div>
            <div class="d-block">{{ $question->title }}</div>
        </div>
        <div class="d-inline">
            <button wire:click="deleteQuestion" class="btn btn-outline-primary">حذف کردن سوال</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="answer_name" class="form-label">جواب</label>
            <input type="text" class="form-control" wire:model.blur="answer_name" id="answer_name">
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
            @foreach($answers as $answer)
                    <li class="list-group-item">{{ $x .'-> '. $answer->name }}</li>
                    @php $x++ ; @endphp
            @endforeach
            </ul>
        </div>
    </div>
</div>
