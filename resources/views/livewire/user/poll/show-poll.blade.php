<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto my-4">
            @if($show_success)
                <span class="alert alert-success">  نظر شما با موفقیت ثبت شد</span>
            @else

                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-2">{{$poll->subject}}</h3>
                    </div>
                    <div class="card-body">
                        @php $y=1; @endphp
                        @foreach($questions as $question)
                            <div class="border shadow-sm my-2 p-2">
                                <h4>{{$y." - ".$question->title}}</h4>
                                <ul class="list-group" wire:key="{{ $question->id }}">
                                    @if ($question->question_type == 'box_text')
                                        @php $x = 1; @endphp

                                        @foreach(answers_of_question($question->id) as $answer)
                                            <li class="list-group-item">
                                                <textarea class="form-control" wire:model.defer="selectedAnswers.box_text.{{$answer->id}}"></textarea>
                                            </li>
                                            @php $x++; @endphp
                                        @endforeach
                                    @elseif ($question->question_type == 'single_choice')
                                        @php $x = 1; @endphp
                                        @foreach(answers_of_question($question->id) as $answer)
                                            <li class="list-group-item">
                                                <input class="form-check-input" type="radio" name="answer_{{ $question->id }}" id="answer_{{ $question->id }}_{{ $x }}" value="{{ $answer->id }}"
                                                       wire:model.defer="selectedAnswers.single_choice.{{ $question->id }}">
                                                {{ $x . '- ' . $answer->name }}
                                            </li>
                                            @php $x++; @endphp
                                        @endforeach
                                    @elseif ($question->question_type == 'multiple_choice')
                                        @php $x = 1; @endphp
                                        @foreach(answers_of_question($question->id) as $answer)
                                            {{--                                        @dd($answer->id)--}}
                                            <li class="list-group-item">
                                                <input class="form-check-input" type="checkbox" id="answer_{{ $question->id }}_{{ $answer->id }}" value="{{ $answer->id }}"
                                                       wire:model.defer="selectedAnswers.multiple_choice.{{ $question->id }}.{{ $answer->id }}">
                                                {{ $x . '- ' . $answer->name }}
                                            </li>
                                            @php $x++; @endphp
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            @php $y++; @endphp
                        @endforeach
                    </div>
                    <div class="card-footer text-center">
                        @if($errors->has('selectedAnswers.single_choice') || $errors->has('selectedAnswers.multiple_choice') ||$errors->has('selectedAnswers.box_text'))
                        <div class="alert alert-danger">لطفا به تمامی سوالات پاسخ دهید</div>
                        @endif


                        <button class="btn btn-lg btn-primary" wire:click="saveAnswers">ذخیره</button>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
