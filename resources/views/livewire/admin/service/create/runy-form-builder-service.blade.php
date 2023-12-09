<div class="card mb-3 border-runy-service">
    <div class="card-header border-runy-service">
        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path opacity="0.5"
                      d="M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V10.0002C3 7.17179 3 5.75757 3.87868 4.87889C4.64706 4.11051 5.82497 4.01406 8 4.00195"
                      stroke="#6c429a" stroke-width="1.5"></path>
                <path d="M10.5 14L17 14" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M7 14H7.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M7 10.5H7.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M7 17.5H7.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M10.5 10.5H17" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M10.5 17.5H17" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path>
                <path
                    d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z"
                    stroke="#6c429a" stroke-width="1.5"></path>
            </g>
        </svg>
        فرم ساز
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                @if(!$show)
                    <button class="btn btn-runy-primary" wire:click.prevent="need()">
                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path opacity="0.5"
                                      d="M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V10.0002C3 7.17179 3 5.75757 3.87868 4.87889C4.64706 4.11051 5.82497 4.01406 8 4.00195"
                                      stroke="#f7f7f7" stroke-width="1.5"></path>
                                <path d="M10.5 14L17 14" stroke="#f7f7f7" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                                <path d="M7 14H7.5" stroke="#f7f7f7" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M7 10.5H7.5" stroke="#f7f7f7" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M7 17.5H7.5" stroke="#f7f7f7" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M10.5 10.5H17" stroke="#f7f7f7" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                                <path d="M10.5 17.5H17" stroke="#f7f7f7" stroke-width="1.5"
                                      stroke-linecap="round"></path>
                                <path
                                    d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z"
                                    stroke="#f7f7f7" stroke-width="1.5"></path>
                            </g>
                        </svg>
                        آیا نیاز به فرم دارید ؟
                    </button>
                @endif
            </div>
        </div>
        @if($show)
            <div class="row">
                <div class="col-4 col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">عنوان سوال</label>
                        <input type="text" class="form-control" wire:model.live.blur="question" name="question">
                        @error('question') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-4 col-md-4">
                    <div class="mb-3">
                        <label for="answer_type" class="form-label">فرمت جواب(شکل جواب)</label>
                        <select wire:model.live.blur="answer_type" class="form-control">
                            <option value="checkbox">گزینه چند انتخابی (چکباکس)</option>
                            <option value="radio">گزینه تک انتخابی (رادیو)</option>
                            <option value="textarea">متنی</option>
                            <option value="select">انتخابی آبشاری</option>
                        </select>
                        @error('answer_type') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-4 col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label text-white d-block">.</label>
                        <button class="btn btn-runy-primary" wire:click.prevent="addQuestion()">
                            <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#fafafa"
                                          stroke-width="1.5" stroke-linecap="round"></path>
                                    <path
                                        d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8"
                                        stroke="#fafafa" stroke-width="1.5" stroke-linecap="round"></path>
                                </g>
                            </svg>
                            اضافه کن
                        </button>
                    </div>
                </div>
            </div>
            @if($questions == null)
                <div class="row">
                    <div class="col-2">
                        <p>سوالی نیست</p>
                    </div>
                </div>
            @else
                @foreach($questions as $question)
                    <hr>
                    @livewire('admin.service.create.runy-form-builder-question-service' , ['question'=>$question] , key($question->id.rand(1,999)))

                @endforeach
            @endif

        @endif
    </div>


</div>
