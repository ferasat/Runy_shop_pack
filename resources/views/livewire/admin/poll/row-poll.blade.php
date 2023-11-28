<div class="row ">
    <div class="col-md-4 col-sm-12">
        {{ $poll->id }} : {{ $poll->subject }}<br>
        {{ $poll->poll_type }}
    </div>
    <div class="col-md-8">
        <div class="card-body d-flex pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between row">
            <div class="col-md-5 d-flex flex-column">
                <div>

                </div>
            </div>
            <div class="col-md-7 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$poll->id}}">
                    نتیجه
                </a>
                <!-- Modal -->

                <div class="modal fade" id="exampleModal{{$poll->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{"نتیجه نظرسنجی"." ".$poll->subject}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="container" >
{{--                                            <h5>تاکنون {{5}} نفر در این نظرسنجی شرکت کرده اند</h5>--}}
                                            @php $x=1 @endphp
                                            @foreach($questions as $question)
                                                @livewire('admin.poll.result.poll-question-result' , compact( 'question','x' ) , key($question->id.rand(1,999)))
                                            @php $x++; @endphp
                                            @endforeach


                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <a target="_blank" class="btn btn-outline-primary btn-sm ms-1" href="{{asset('/poll/show/'.$poll->id)}}"
                   type="button">دیدن</a>
                <a class="btn btn-outline-warning btn-sm ms-1" href="{{asset('/dashboard/poll/edit/'.$poll->id)}}"
                   type="button">ویرایش</a>

                <button type="button" class="btn btn-outline-danger btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#delete_{{$poll->id}}">حذف</button>

                <div class="modal fade" id="delete_{{$poll->id}}" tabindex="-1" role="dialog" aria-hidden="true" wire:model="showModal">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="modal-title">برای حذف این مورد مطمئن هستید ؟</span>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">در صورت خذف دیگر در دسترس نخواهد بود</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                <button class="btn btn-danger" wire:click="remove({{$poll->id}})" > بله مطمئنم</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

