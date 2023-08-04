<div class="row ">
    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="listPost">
            @foreach($messages as $message)
                <div class="card ">
                    <div class="card-body mb-n2 border-last-none h-100">
                        @livewire('admin.send-messages.row-send-messages' , ['message' => $message]  , key($message->id))
                    </div>
                </div>
            @endforeach

        </section>
    </div>
    <div class="col-xl-4 mb-5">
        <div class="product-menu card">
            <div class="card-header">دسترسی پیام ها</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">

                    <a href="{{ asset(route('send.messages.index')) }}">
                        <i class="fa-solid fa-list fa-rotate-180"></i>
                        پیام ها
                    </a>
                </li>
                <li class="list-group-item">

                    <a href="{{ asset(route('send.messages.create')) }}">
                        <i class="fa-regular fa-square-plus"></i>
                        پیام جدید
                    </a>
                </li>

            </ul>
        </div>

    </div>
</div>
