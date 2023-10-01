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
                                        <svg class="icon-svg-panel" viewBox="-2.4 -2.4 28.80 28.80" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#6c429a"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{opacity:0.2;fill:none;stroke:#6c429a;stroke-width:0.00024000000000000003;stroke-miterlimit:10;} </style> <g id="grid_system"></g> <g id="_icons"> <g> <path d="M21.8,4.5c-0.3-0.7-0.9-1.3-1.6-1.6c-1.5-0.6-3.2,0.1-3.9,1.5l-4.6,10.3c-0.4,0.9-0.5,2-0.4,2.9l0.4,2.2 c0.1,0.3,0.3,0.6,0.6,0.7c0.1,0.1,0.3,0.1,0.4,0.1c0.2,0,0.4-0.1,0.5-0.2l1.9-1.2c0.9-0.6,1.5-1.3,1.9-2.3l4.6-10.3 C22.1,6,22.1,5.2,21.8,4.5z M15.4,16.3c-0.3,0.6-0.7,1-1.2,1.4l-0.7,0.4l-0.1-0.7c-0.1-0.6,0-1.2,0.2-1.8l3.5-8l1.8,0.7L15.4,16.3 z M20,5.9l-0.2,0.5L18,5.7l0.2-0.5c0.2-0.4,0.5-0.6,0.9-0.6c0.1,0,0.3,0,0.4,0.1C19.7,4.8,19.9,5,20,5.2c0,0,0,0,0,0 C20.1,5.5,20.1,5.7,20,5.9z"></path> <path d="M3,17h4c0.6,0,1-0.4,1-1s-0.4-1-1-1H3c-0.6,0-1,0.4-1,1S2.4,17,3,17z"></path> <path d="M9,19H3c-0.6,0-1,0.4-1,1s0.4,1,1,1h6c0.6,0,1-0.4,1-1S9.6,19,9,19z"></path> </g> </g> </g></svg>
                                        نوشته جدید
                                    </a>
                                </li>
                                <li class="hover-li-primary">
                                    <a href="{{ asset(route('category.post')) }}" class=" shadow">
                                        <svg class="icon-svg-panel" fill="#673AB7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M0,439.5h170.7V268.8H0V439.5z M42.7,311.5H128v85.3H42.7V311.5z M213.3,418.2H512v-42.7H213.3V418.2z M0,226.2h170.7V55.5 H0V226.2z M42.7,98.2H128v85.3H42.7V98.2z M213.3,76.8v42.7H512V76.8H213.3z M213.3,332.8H512v-42.7H213.3V332.8z M213.3,204.8H512 v-42.7H213.3V204.8z"></path> </g></svg>
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
