<div class="">

    <div class="row ">
        <div class="col-xl-8 mb-5">
            <section class="scroll-section" id="listPost">

                <div class="card h-100-card">
                    <div class="card-body">
                        <div class="col-auto">
                            <label class="visually-hidden" for="search">جستجو</label>
                            <div class="input-group">
                                <div class="input-group-text">جستجو</div>
                                <input type="text" class="form-control" wire:model.live="search" id="search" placeholder="حداقل سه حرف وارد کنید...">
                            </div>
                        </div>
                    </div>
                    <div class="card-body mb-n2 border-last-none">
                        @foreach($posts as $post)
                            @livewire('admin.post.row-post' , ['post' => $post]  , key($post->id))
                        @endforeach
                    </div>
                    <div class="card-footer">
                        {{ $posts->links() }}
                    </div>
                </div>
            </section>
        </div>

        <div class="col-xl-4 mb-5">
            <section class="scroll-section" id="listPost">
                @if($type == 'post')
                    <div class="card h-100-card">
                        <div class="card-body mb-n2 border-last-none h-100">
                            <ul>
                                <li class="hover-li-primary">
                                    <a href="{{ asset(route('post.Create')) }}" class=" shadow">
                                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z" stroke="#6c429a" stroke-width="1.5"></path> <path opacity="0.5" d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9" stroke="#6c429a" stroke-width="1.5"></path> </g></svg>
                                        نوشته جدید
                                    </a>
                                </li>
                                <li class="hover-li-primary">
                                    <a href="{{ asset(route('category.post')) }}" class=" shadow">
                                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V10.0002C3 7.17179 3 5.75757 3.87868 4.87889C4.64706 4.11051 5.82497 4.01406 8 4.00195" stroke="#6c429a" stroke-width="1.5"></path> <path d="M10.5 14L17 14" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 14H7.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 10.5H7.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 17.5H7.5" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M10.5 10.5H17" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M10.5 17.5H17" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z" stroke="#6c429a" stroke-width="1.5"></path> </g></svg>
                                        دسته بندی ها
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="card h-100-card">
                        <div class="card-body mb-n2 border-last-none h-100">
                            <ul>
                                <li class="hover-li-primary">
                                    <a href="{{ asset(route('page.Create')) }}" class=" shadow">
                                        <svg class="icon-svg-panel" viewBox="-2.4 -2.4 28.80 28.80" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#6c429a"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{opacity:0.2;fill:none;stroke:#6c429a;stroke-width:0.00024000000000000003;stroke-miterlimit:10;} </style> <g id="grid_system"></g> <g id="_icons"> <g> <path d="M21.8,4.5c-0.3-0.7-0.9-1.3-1.6-1.6c-1.5-0.6-3.2,0.1-3.9,1.5l-4.6,10.3c-0.4,0.9-0.5,2-0.4,2.9l0.4,2.2 c0.1,0.3,0.3,0.6,0.6,0.7c0.1,0.1,0.3,0.1,0.4,0.1c0.2,0,0.4-0.1,0.5-0.2l1.9-1.2c0.9-0.6,1.5-1.3,1.9-2.3l4.6-10.3 C22.1,6,22.1,5.2,21.8,4.5z M15.4,16.3c-0.3,0.6-0.7,1-1.2,1.4l-0.7,0.4l-0.1-0.7c-0.1-0.6,0-1.2,0.2-1.8l3.5-8l1.8,0.7L15.4,16.3 z M20,5.9l-0.2,0.5L18,5.7l0.2-0.5c0.2-0.4,0.5-0.6,0.9-0.6c0.1,0,0.3,0,0.4,0.1C19.7,4.8,19.9,5,20,5.2c0,0,0,0,0,0 C20.1,5.5,20.1,5.7,20,5.9z"></path> <path d="M3,17h4c0.6,0,1-0.4,1-1s-0.4-1-1-1H3c-0.6,0-1,0.4-1,1S2.4,17,3,17z"></path> <path d="M9,19H3c-0.6,0-1,0.4-1,1s0.4,1,1,1h6c0.6,0,1-0.4,1-1S9.6,19,9,19z"></path> </g> </g> </g></svg>
                                        برگه جدید
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
            </section>
        </div>

    </div>
</div>
