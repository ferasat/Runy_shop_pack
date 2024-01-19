<div>
    <strong>{{$poll_question_temp->question_title}}</strong>
    <br>
    @foreach($poll_answers_temp as $poll_answer_temp)
        @livewire('admin.poll.temp.modal-row-poll-answer' , ['poll_answer_temp' => $poll_answer_temp]  , key($poll_answer_temp->id))
    @endforeach

</div>
