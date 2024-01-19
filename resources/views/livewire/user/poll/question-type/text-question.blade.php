<div class="card-body p-3">
    <h4>{{ $question->question_title }}</h4>
    <ul class="list-group" wire:key="{{ $question->id }}">
        <li class="list-group-item ">
            <textarea class="form-control" wire:model.lazy="selectedAnswer"></textarea>
        </li>
        @error('selectedAnswer') <span class="text-danger">{{ $message }}</span> @enderror
    </ul>
    <div class="my-1">
        <button class="btn btn-info" wire:click="nextStep" @if($currentStep == $maxStep+1) disabled @endif>بعدی</button>
        <button class="btn btn-secondary" wire:click="previousStep" @if($currentStep == 1) disabled @endif>قبلی</button>
    </div>
</div>
