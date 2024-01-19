<div class="row ">
    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="listPost">
            @foreach($polls as $poll)
                <div class="card mb-2 shadow">
                    <div class="card-body">
                        @livewire('admin.poll.result.row-poll-result' , ['poll' => $poll] , key($poll->id))
                    </div>
                </div>
            @endforeach

        </section>
    </div>

</div>
