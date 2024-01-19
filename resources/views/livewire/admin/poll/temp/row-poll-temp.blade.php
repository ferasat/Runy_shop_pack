<div class="border-bottom border-separator-light mb-2 pb-2">
    <div class="row g-0 sh-6">
        <div class="col">
            <div class="card-body d-flex flex-row pt-0 pb-0 ps-0 pe-3 h-100 align-items-center justify-content-between">
                <div class="d-flex flex-column">
                    <div class="p-2">{{ $poll_temp->id }} : {{ $poll_temp->name }}</div>

                </div>
                <div class="d-flex">

                    <a class="btn btn-outline-warning btn-sm ms-1"
                       href="{{ asset('/dashboard/poll_template/edit_/'.$poll_temp -> id)  }}" type="button">دیدن</a>
                    <a class="btn btn-outline-primary btn-sm ms-1"
                       href="{{ asset('/show/poll/'.$poll_temp -> id)  }}" type="button">دیدن در صفحه</a>

                    <a href="{{asset('/dashboard/poll_template/all_poll/'.$poll_temp -> id)}}" type="button"
                       class="btn btn-outline-secondary btn-sm ms-1">
                        لیست نظرات
                    </a>

                    <a type="button" class="btn btn-outline-danger btn-sm ms-1" data-bs-toggle="modal"
                       data-bs-target="#exampleModal{{$poll_temp->id}}">
                        نتیجه
                    </a>
                    <!-- Modal -->

                    <div class="modal fade" id="exampleModal{{$poll_temp->id}}" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5"
                                        id="exampleModalLabel">{{"نتیجه نظرسنجی"." ".$poll_temp->name}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    @foreach($poll_questions_temp as $poll_question_temp)
                                        @livewire('admin.poll.temp.modal-poll-answer' , ['poll_question_temp' =>
                                        $poll_question_temp]  , key($poll_question_temp->id))
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
