<div class="card my-2">
    <div class="card-header">
        {{"سوال ".$x}}: {{$question->title}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    @php $y=1;@endphp
                    @foreach($answers as $answer)
                        @livewire('admin.poll.result.poll-question-answer-result' , compact( 'question','answer','y' ) , key($answer->id.rand(1,999)))

                        @php $y++;@endphp
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
