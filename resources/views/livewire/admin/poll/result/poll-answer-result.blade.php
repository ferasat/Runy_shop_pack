<div>
    <h6>{{++$index}} - {{$poll_question->question_title}}</h6>
    @foreach($poll_answers as $poll_answer)
        @livewire('admin.poll.result.poll-row-answer-result' , ['poll_answer' =>$poll_answer]  , key($poll_answer->id))
    @endforeach
    <hr>
</div>
