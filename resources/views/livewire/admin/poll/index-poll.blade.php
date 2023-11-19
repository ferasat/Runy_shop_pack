<div class="row ">
    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="listPost">
            @foreach($polls as $poll)
                <div class="card mb-2 shadow">
                    <div class="card-body">
                        @livewire('admin.poll.row-poll' , ['poll' => $poll]  , key($poll->id))
                    </div>
                </div>
            @endforeach

        </section>
    </div>
    <div class="col-xl-4 mb-5">
        <div class="product-menu card border-color-runy-secend">
            <div class="card-header bg-runy-secend">دسترسی نظرسنجی ها</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ asset(route('poll.index')) }}">
                        <i class="fa-solid color-runy-primary fa-list fa-rotate-180 p-2"></i>
                        نظرسنجی ها
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ asset(route('poll.Create')) }}">
                        <i class="fa-regular color-runy-primary fa-square-plus p-2"></i>
                        نظرسنجی جدید
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
