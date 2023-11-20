<div class="row">
    <div class="col-md-8 mb-5">
        <section class="scroll-section" id="listPost">

            <div class="card mb-3 border-color-runy-primary">
                <div class="card-header border-color-runy-primary">
                    <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16.2 6a1 1 0 0 1 1-1c.637 0 1.262.128 1.871.372.663.265 1.173.658 1.636 1.12.463.464.856.974 1.121 1.637.244.609.372 1.234.372 1.871s-.128 1.262-.372 1.871c-.261.655-.648 1.16-1.104 1.619l-.984 1.083a.967.967 0 0 1-.033.034l-3.2 3.2c-.463.463-.973.856-1.636 1.122A5.012 5.012 0 0 1 13 19.3a5.012 5.012 0 0 1-1.871-.372c-.663-.265-1.173-.658-1.636-1.12-.463-.464-.856-.974-1.121-1.637A5.145 5.145 0 0 1 8 14.2c0-.637.128-1.262.372-1.871.265-.663.658-1.173 1.12-1.636l1.1-1.1a1 1 0 1 1 1.415 1.414l-1.1 1.1c-.337.337-.544.627-.678.964A3.014 3.014 0 0 0 10 14.2c0 .476.077.85.229 1.229.134.337.341.627.678.964.337.337.627.544.964.678.391.157.766.229 1.129.229s.738-.072 1.129-.229c.337-.134.627-.341.964-.678l3.183-3.183.984-1.083a.967.967 0 0 1 .033-.034c.337-.337.544-.627.678-.964.157-.391.229-.766.229-1.129s-.072-.738-.229-1.129c-.134-.337-.341-.627-.678-.964-.337-.337-.627-.544-.964-.679A3.014 3.014 0 0 0 17.2 7a1 1 0 0 1-1-1zm-4.9 1.5c-.363 0-.738.072-1.129.228-.337.135-.627.342-.964.68L5.924 11.69l-.984 1.083-.033.034c-.337.337-.544.627-.679.964A3.014 3.014 0 0 0 4 14.9c0 .363.072.738.228 1.129.135.337.342.627.68.964.336.337.626.544.963.679.391.156.766.228 1.129.228a1 1 0 1 1 0 2 5.011 5.011 0 0 1-1.871-.371c-.663-.266-1.173-.659-1.636-1.122-.463-.463-.856-.973-1.121-1.636A5.012 5.012 0 0 1 2 14.9c0-.637.128-1.262.372-1.871.261-.655.648-1.16 1.104-1.619l.984-1.083.033-.034 3.3-3.3c.463-.463.973-.856 1.636-1.121A5.012 5.012 0 0 1 11.3 5.5c.637 0 1.262.128 1.871.372.663.265 1.173.658 1.636 1.12.463.464.856.974 1.121 1.637.244.609.372 1.234.372 1.871s-.128 1.262-.372 1.871c-.262.655-.649 1.162-1.105 1.62l-1.086 1.185a1 1 0 0 1-1.474-1.352l1.1-1.2.03-.031c.337-.337.544-.627.678-.964.157-.391.229-.766.229-1.129s-.072-.738-.229-1.129c-.134-.337-.341-.627-.678-.964-.337-.337-.627-.544-.964-.679A3.014 3.014 0 0 0 11.3 7.5z" fill="#6c429a"></path></g></svg>
                    عنوان
                </div>
                <div class="card-body mb-n2 border-last-none h-100">
                    <div class="mb-3">
                        <label class="form-label">عنوان نظرسنجی</label>
                        <input type="text" class="form-control border-color-runy-primary" wire:model.blur="subject">
                        @error('subject') {{$message}} @enderror
                    </div>


                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">ایجاد سوال</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <label for="poll_type" class="form-label">نوع سوال</label>
                            <select class="form-control" wire:model.blur="question_type">
                                <option value="single_choice">تک انتخابی</option>
                                <option value="multiple_choice">چند انتخابی</option>
                                <option value="box_text">متنی</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <label class="form-label">عنوان سوال</label>
                            <input type="text" class="form-control border-color-runy-primary" wire:model.blur="title">
                            @error('title') {{$message}} @enderror
                        </div>
                        <div class="col-2">
                            <label class="form-label text-white">.</label>
                            <button class="btn btn-runy-primary" wire:click="addQuestion()">
                                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g opacity="0.4"> <path d="M8 12H16" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 16V8" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                اضافه کن
                            </button>
                        </div>
                    </div>
                    <div class="row hr mt-3">

                    </div>
                </div>
            </div>

            @if(count($questions)>0)
            <div class="card mb-3">
                <div class="card-header">سوالات</div>
                <div class="card-body">

                    @foreach($questions as $question)
                        @livewire('admin.poll.edit.show-poll-questions' , compact( 'question' ) , key($question->id.rand(1,999)))
                    @endforeach

                </div>
                {{--@php $x=1 ; @endphp
                @foreach($questions as $question)
                    @livewire('admin.poll.edit.add-answer' , compact( 'question' , 'x') , key($answer->id.rand(1,999).$x))
                    @php $x++ ; @endphp
                @endforeach--}}

            </div>
            @endif


        </section>
    </div>
    <div class="col-md-4 mb-5">


        <div class="card border-color-runy-primary">
            <div class="card-header border-color-runy-primary">
                <svg class="icon-svg-panel" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#D7DEED;" d="M481.103,35.31H370.759V512h79.448C484.334,512,512,484.334,512,450.207v-384 C512,49.143,498.167,35.31,481.103,35.31z"></path> <path style="fill:#E4EAF6;" d="M450.207,441.379V66.207c0-17.064,13.833-30.897,30.897-30.897l0,0H370.759v414.897h70.621 C446.254,450.207,450.207,446.254,450.207,441.379z"></path> <path style="fill:#a94b9c9e;" d="M388.414,450.207V8.828c0-4.875-3.953-8.828-8.828-8.828H8.828C3.953,0,0,3.953,0,8.828v450.207 C0,488.287,23.713,512,52.966,512h397.241C416.079,512,388.414,484.334,388.414,450.207z"></path> <path style="fill:#<svg viewBox=" 0="" 24="" 24"="" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.34" d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z" stroke="#6c429b" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z" stroke="#6c429b" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.34" d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z" stroke="#6c429b" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z" stroke="#6c429b" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> </g>;" d="M344.151,141.241H44.263c-4.945,0-8.952-4.009-8.952-8.952V44.263c0-4.943,4.009-8.952,8.952-8.952 H344.15c4.945,0,8.952,4.009,8.952,8.952v88.025C353.103,137.233,349.095,141.241,344.151,141.241z"&gt;</path> <path style="fill:#6c429a;" d="M339.862,194.207H48.552c-7.313,0-13.241-5.929-13.241-13.241l0,0 c0-7.313,5.929-13.241,13.241-13.241h291.31c7.313,0,13.241,5.929,13.241,13.241l0,0 C353.103,188.278,347.175,194.207,339.862,194.207z"></path> <g> <path style="fill:#AFB9D2;" d="M176.552,238.345H44.138c-4.875,0-8.828-3.953-8.828-8.828l0,0c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828l0,0C185.379,234.392,181.427,238.345,176.552,238.345z"></path> <path style="fill:#AFB9D2;" d="M344.276,238.345H211.862c-4.875,0-8.828-3.953-8.828-8.828l0,0c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828l0,0C353.103,234.392,349.151,238.345,344.276,238.345z"></path> </g> <g> <path style="fill:#C7CFE2;" d="M176.552,273.655H44.138c-4.875,0-8.828-3.953-8.828-8.828l0,0c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828l0,0C185.379,269.703,181.427,273.655,176.552,273.655z"></path> <path style="fill:#C7CFE2;" d="M344.276,273.655H211.862c-4.875,0-8.828-3.953-8.828-8.828l0,0c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828l0,0C353.103,269.703,349.151,273.655,344.276,273.655z"></path> <path style="fill:#C7CFE2;" d="M344.276,308.966H211.862c-4.875,0-8.828-3.953-8.828-8.828l0,0c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828l0,0C353.103,305.013,349.151,308.966,344.276,308.966z"></path> <path style="fill:#C7CFE2;" d="M344.276,344.276H211.862c-4.875,0-8.828-3.953-8.828-8.828l0,0c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828l0,0C353.103,340.323,349.151,344.276,344.276,344.276z"></path> <path style="fill:#C7CFE2;" d="M344.276,414.897H211.862c-4.875,0-8.828-3.953-8.828-8.828l0,0c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828l0,0C353.103,410.944,349.151,414.897,344.276,414.897z"></path> </g> <g style="opacity:0.5;"> <path style="fill:#6c429a;" d="M344.276,379.586H211.862c-4.875,0-8.828-3.953-8.828-8.828l0,0c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828l0,0C353.103,375.634,349.151,379.586,344.276,379.586z"></path> </g> <path style="fill:#C7CFE2;" d="M344.276,450.207H211.862c-4.875,0-8.828-3.953-8.828-8.828l0,0c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828l0,0C353.103,446.254,349.151,450.207,344.276,450.207z"></path> <path style="fill:#E4EAF6;" d="M176.552,450.207H44.138c-4.875,0-8.828-3.953-8.828-8.828V300.138c0-4.875,3.953-8.828,8.828-8.828 h132.414c4.875,0,8.828,3.953,8.828,8.828v141.241C185.379,446.254,181.427,450.207,176.552,450.207z"></path> <g> <circle style="fill:#C7CFE2;" cx="110.345" cy="348.69" r="30.897"></circle> <path style="fill:#C7CFE2;" d="M167.501,450.207c-2.261-29.62-26.957-52.966-57.156-52.966s-54.895,23.346-57.156,52.966H167.501z"></path> </g> </g></svg>
                انتشار
            </div>
            <div class="card-body">


                <label class="visually-hidden" for="autoSizingInputGroup">نوع نظرسنجی</label>
                <div class="input-group">
                    <div class="input-group-text border-color-runy-primary">نوع نظرسنجی</div>
                    <select id="statusPublish" wire:model.live.blur="poll_type" class="form-select border-color-runy-primary" aria-hidden="true">
                        <option value="single_person">شخصی</option>
                        <option value="template">قالب</option>
                    </select>
                </div>
            </div>
            <div class="card-footer text-center border-color-runy-primary">
                <button class="btn btn-runy-primary mb-1" wire:click.prevent="save">ذخیره</button>
            </div>
        </div>


        <div class="card border-color-runy-primary mt-2">
            <div class="card-header border-color-runy-primary">
                ارسال پیام
            </div>
            <div class="card-body">
                <label class="visually-hidden" for="autoSizingInputGroup">مشتری</label>
                <div class="input-group">
                    <div class="input-group-text border-color-runy-primary">مشتری</div>
                    <select id="statusPublish" wire:model.live.blur="customer_id" class="form-select border-color-runy-primary" aria-hidden="true">\
                        @foreach($customers as $customer)
                        <option value=""></option>
                        <option value="{{$customer->id}}">{{$customer->name." ".$customer->family}}</option>
                        @endforeach
                    </select>

                </div>
                <p class="mt-2">{{$SMS_text}}</p>
            </div>
            <div class="card-footer text-center border-color-runy-primary">
                <button class="btn btn-runy-primary mb-1" wire:click.prevent="sendSMS">ارسال پیام</button>
            </div>
            @if($show_success)
                <span class="alert alert-success">پیام شما با موفقیت ارسال شد</span>
            @endif
        </div>

    </div>
</div>

