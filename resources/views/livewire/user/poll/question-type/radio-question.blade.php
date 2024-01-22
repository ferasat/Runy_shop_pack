<div class="card-body p-3">

    <h4>{{ $question->question_title }}</h4>
    <ul class="list-group" wire:key="{{ $question->id }}">

        @foreach(answers_of_question($question->id) as $index => $answer)
            @php
                $myanswer=\Poll\Models\PollTypeAnswerField::query()->find($answer->poll_type_answer_field_id);
            @endphp
            <li class="list-group-item">
                <input class="form-check-input" type="radio" name="answer_{{ $question->id }}"
                       id="answer_{{ $question->id }}_{{ $index + 1 }}" value="{{ $myanswer->id }}"
                       wire:model.lazy="selectedAnswer">
                {{ $index + 1 . '- ' . $myanswer->answer_title }}
            </li>

        @endforeach
        @error('selectedAnswer') <span class="text-danger">{{ $message }}</span> @enderror
    </ul>
    <div class="my-1">
        <button class="btn btn-info" wire:click="nextStep" @if($currentStep == $maxStep+1) disabled @endif>بعدی</button>
        <button class="btn btn-secondary" wire:click="previousStep" @if($currentStep == 1) disabled @endif>قبلی</button>
    </div>
</div>
