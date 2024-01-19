<div class="row">
    <div class="col-md-8 mb-5 mx-auto">
        <section class="scroll-section" id="listPost">

            <div class="card mb-3 border-color-primary">
                <div class="card-header border-color-primary">
                    <h5>
                        نظرسنجی {{$poll->name}}
                    </h5>
                </div>
                <div class="card-body mb-n2 border-last-none h-100">
                    @foreach($poll_questions as $index=>$poll_question)
                        @livewire('admin.poll.result.poll-answer-result' , ['poll_question' =>
                        $poll_question,'index'=>$index]  , key($poll_question->id))
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</div>
