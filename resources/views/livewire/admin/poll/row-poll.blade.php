<div class="row ">
    <div class="col-md-2 col-sm-12">

    </div>
    <div class="col-md-10">
        <div class="card-body d-flex pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between row">
            <div class="col-md-5 d-flex flex-column">
                <div>{{ $question->title }}</div>
                <div class="text-small text-muted">{{ statusProduct($question->statusPublish) }}</div>
            </div>
            <div class="col-md-7 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    نتیجه
                </a>
                <!-- Modal -->
                @if($answers)
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">نتیجه نظرسنجی</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="container" style="direction: ltr">
                                            @foreach($answers as $answer)
                                                @php
                                                $count=floor($answer->vote_count*100/$question->total_vote_count);
                                                @endphp
                                                <span>{{$answer->option}}</span>
                                                <div class="progress mb-3">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{$count}}%" aria-valuenow="{{$count}}" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-label">{{$count}}%</div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endif


                <a class="btn btn-outline-warning btn-sm ms-1" href="{{asset('/dashboard/poll/edit/'.$question->id)}}"
                   type="button">ویرایش</a>
                <a class="btn btn-outline-secondary btn-sm ms-1" wire:click.privent="cloneProduct({{$question->id}})">رو
                    نوشت</a>
                <a class="btn btn-outline-danger btn-sm ms-1"
                   href="{{ asset('/dashboard/product/delete/'.$question->id) }}" {{--wire:click.privent="deleteProduct({{$poll->id}})"--}}>حذف</a>

            </div>
        </div>
    </div>
</div>

