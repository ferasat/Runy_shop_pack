<div class="card-body p-3">
    <h4>{{ $question->question_title }}</h4>
    <ul class="list-group" wire:key="{{ $question->id }}">
        <li class="list-group-item">
            <select class="form-select" aria-label="Default select example" wire:model="selectedAnswer">
                <option value="">انتخاب کنید</option>
                @foreach(answers_of_question($question->id) as $index => $answer)
                    @php
                        $myanswer=\Poll\Models\PollTypeAnswerField::query()->find($answer->poll_type_answer_field_id);
                    @endphp
                    <option value="{{$myanswer->id}}">{{$myanswer->answer_title}}</option>
                @endforeach
            </select>
        </li>
        @error('selectedAnswer') <span class="text-danger">{{ $message }}</span> @enderror
    </ul>
    <div class="my-1">
        <button class="btn btn-info" wire:click="nextStep" @if($currentStep == $maxStep+1) disabled @endif>بعدی</button>
        <button class="btn btn-secondary" wire:click="previousStep" @if($currentStep == 1) disabled @endif>قبلی</button>
    </div>
</div>
