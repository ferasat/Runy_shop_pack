<div class="">
    <div class=" d-flex justify-content-between">
        <div class="card-body">
            <p class="mb-0">{{$description}} .</p>
        </div>


    </div>


    <div class="row ">

        <div class="col-xl-8 mb-5">
            <section class="scroll-section" id="listPost">

                <div class="card h-100-card">
                    <div class="card-body mb-n2 border-last-none h-100">
                        @foreach($posts as $post)
                            @livewire('admin.post.row-post' , ['post' => $post]  , key($post->id))
                        @endforeach
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
                                <li>
                                    <a href="{{ asset(route('post.Create')) }}" class=" shadow">
                                        نوشته جدید
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset(route('category.post')) }}" class=" shadow">
                                        دستبندی ها
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="card h-100-card">
                        <div class="card-body mb-n2 border-last-none h-100">
                            <ul>
                                <li>
                                    <a href="{{ asset(route('page.Create')) }}" class=" shadow">
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
