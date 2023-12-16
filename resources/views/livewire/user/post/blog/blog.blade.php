<div class="container-fluid p-0"  >
    <div class="bg-">
        <div class="container">
            <div class="row py-4 sarPage d-flex justify-content-center">
                <div class="col-md-6 col-sm-12 col-lg-6 text-center pb-4">
                    <h1 class="text-danger h3 h3-sm-w text-center" itemprop="name">مجله فناوری ماشین های اداری مرتضوی</h1>
                    <p class="text-muted py-3">با ما بروز باشید  </p>
                    <form class="custom-form" role="search">
                        <div class="input-group input-group-lg mb-2">
                            <input name="keyword" type="search" class="form-control border-color-runy-danger" id="keyword"
                                   placeholder="دنبال چی میگردی؟" aria-label="Search">

                            <button type="submit" class="btn btn-runy-search bg-white">
                                <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#fd5858" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </button>
                        </div>
                        پیشنهاد : <span class="small-suggest p-1 border rounded border-color-runy-danger-badge mt-2">آموزش ریست کردن پرینتر</span> ، <span class="small-suggest p-1 border rounded border-color-runy-danger-badge mt-2">دانلود درایور</span> ، <span></span>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="container">

        <div class="row py-5">
            <div class="col-md-9">
                <div class="row" itemscope itemtype="https://schema.org/AudioObject">
                    <link itemprop="additionalType" href="https://schema.org/ArchiveComponent"/>
                @foreach($posts as $post)
                        <div class="col-md-4" itemprop="abstract">
                            <div class="card mb-3">
                                <img src="{{ asset($post->pic) }}" class="card-img card-img-top"
                                     alt="{{ $post->name }}">
                                <div class="card-body">
                                    <h4 class="card-title mb-3" itemprop="name">
                                        <a href="{{ asset('post/'.$post->slug) }}" class="stretched-link" property="holdingArchive" itemprop="url">
                            <span class="overflow-hidden">
                                {{ $post->name }}
                            </span>
                                        </a>
                                    </h4>
                                    <div class="card-text" itemprop="holdingArchive">
                                        {!! text_summary($post->texts) !!}
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-outline-primary" href="{{ asset('post/'.$post->slug) }}"> بیشتر</a>
                                </div>
                            </div>
                        </div>
                @endforeach
                </div>
                <div class="d-block w-100">
                    {{ $posts->links() }}
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-5 sticky-top shadow-sm">
                    <div class="card-header">
                        <svg class="icon-svg-panel" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#f33939" stroke="#f33939"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ff4d4d;} </style> <g> <path class="st0" d="M67.222,321.722c3.981,11.087,9.068,21.66,15.076,31.71l76.594-45.804c-3.131-5.282-5.874-10.9-8.024-16.767 L67.222,321.722z"></path> <path class="st0" d="M187.049,436.485l27.16-84.93c-17.997-5.704-33.423-16.276-45.204-29.911l-67.51,58.262 C123.762,405.695,153.033,425.663,187.049,436.485z"></path> <path class="st0" d="M422.153,190.839c-3.981-11.086-9.068-21.659-15.068-31.647l-76.532,45.742 c3.132,5.282,5.874,10.9,8.024,16.766L422.153,190.839z"></path> <path class="st0" d="M302.31,76.046l-27.152,84.93c17.99,5.711,33.486,16.292,45.251,29.972l67.51-58.246 C365.66,106.843,336.319,86.929,302.31,76.046z"></path> <path class="st0" d="M249.666,224.965c-17.289-2.743-33.526,9.053-36.268,26.334c-2.743,17.296,9.053,33.525,26.334,36.268 c17.288,2.742,33.525-9.038,36.268-26.334C278.742,243.952,266.955,227.707,249.666,224.965z"></path> <path class="st0" d="M323.105,268.704c0.662-4.207,0.99-8.392,0.99-12.528c-0.008-38.395-27.861-72.091-66.949-78.316 c-4.208-0.662-8.391-0.989-12.528-0.989c-38.402,0-72.099,27.86-78.316,66.949c-0.67,4.199-0.997,8.391-0.997,12.528 c0,38.41,27.868,72.099,66.949,78.316c4.206,0.67,8.39,0.989,12.528,0.989C283.184,335.653,316.872,307.791,323.105,268.704z M244.781,316.081c-3.117,0-6.272-0.242-9.451-0.748c-29.45-4.651-50.455-30.112-50.455-58.986c0-3.116,0.249-6.272,0.755-9.459 c4.651-29.442,30.113-50.447,58.987-50.447c3.116,0,6.272,0.249,9.45,0.756c29.45,4.651,50.456,30.112,50.456,58.979 c0,3.116-0.25,6.272-0.756,9.458C299.108,295.084,273.647,316.081,244.781,316.081z"></path> <path class="st0" d="M299.926,358.348h-33.774c-1.286,0-2.15,0.772-2.15,1.932v127.672c0,1.162,0.865,1.932,2.15,1.932h33.774 c19.143,0,30.33-6.965,35.496-21.082c2.578-7.16,3.654-16.057,3.654-44.69c0-28.624-1.076-37.522-3.654-44.682 C330.257,365.313,319.069,358.348,299.926,358.348z M313.046,461.643c-2.578,6.576-7.308,9.482-15.488,9.482h-9.248 c-0.857,0-1.293-0.39-1.293-1.161V378.27c0-0.772,0.436-1.161,1.293-1.161h9.248c8.181,0,12.91,2.906,15.488,9.482 c1.722,4.83,2.587,11.219,2.587,37.522C315.633,450.423,314.768,456.805,313.046,461.643z"></path> <path class="st0" d="M424.249,358.348h-18.075c-1.286,0-2.151,0.577-2.361,1.932l-16.354,88.787h-0.647L369.82,360.28 c-0.21-1.356-0.857-1.932-2.15-1.932h-18.496c-1.722,0-2.15,0.772-1.939,1.932l29.045,127.672c0.211,1.162,0.857,1.932,2.15,1.932 h16.564c1.285,0,1.932-0.771,2.15-1.932l29.038-127.672C426.399,359.119,425.963,358.348,424.249,358.348z"></path> <path class="st0" d="M508.346,379.431c-5.166-14.117-16.353-21.083-35.496-21.083h-33.774c-1.285,0-2.15,0.772-2.15,1.932v127.672 c0,1.162,0.865,1.932,2.15,1.932h33.774c19.143,0,30.33-6.965,35.496-21.082c2.579-7.16,3.654-16.057,3.654-44.69 C512,395.488,510.925,386.591,508.346,379.431z M485.97,461.643c-2.578,6.576-7.308,9.482-15.489,9.482h-9.248 c-0.857,0-1.285-0.39-1.285-1.161V378.27c0-0.772,0.428-1.161,1.285-1.161h9.248c8.181,0,12.91,2.906,15.489,9.482 c1.722,4.83,2.586,11.219,2.586,37.522C488.556,450.423,487.692,456.805,485.97,461.643z"></path> <path class="st0" d="M82.898,393.322c-31.679-37.436-50.276-85.577-50.276-136.772c0-11.048,0.865-22.236,2.649-33.51 c8.305-52.263,34.935-96.875,72.372-128.576c37.436-31.686,85.578-50.276,136.773-50.276c11.047,0,22.236,0.865,33.51,2.649 c52.263,8.305,96.874,34.928,128.576,72.372c31.686,37.436,50.275,85.578,50.275,136.773c0,11.047-0.865,22.236-2.648,33.51 c-1.465,9.216-3.693,18.106-6.256,26.817h34.016c1.784-7.098,3.28-14.336,4.448-21.706c2.065-12.964,3.062-25.875,3.062-38.62 c0-59.142-21.488-114.716-57.996-157.848c-36.494-43.147-88.18-73.969-148.366-83.513c-12.964-2.056-25.874-3.054-38.62-3.054 c-59.142,0-114.709,21.488-157.848,57.998c-43.147,36.494-73.969,88.18-83.505,148.365C0.997,230.893,0,243.803,0,256.55 c0,59.142,21.488,114.708,57.998,157.847c36.493,43.147,88.179,73.969,148.365,83.505c8.446,1.348,16.845,2.072,25.212,2.532 v-32.622c-6.669-0.42-13.362-1.051-20.101-2.119C159.212,457.389,114.6,430.759,82.898,393.322z"></path> </g> </g></svg>
                        تازه ترین درایور ها</div>
                    <ul class="list-group" itemscope itemtype="https://schema.org/AudioObject">
                        @foreach($dl_drivers as $driver)
                            <li class="list-group-item " >
                                <a class="d-inline" href="{{ asset('post/'.$driver->slug) }}" itemprop="url">
                                    <h3 class="h4" title="{{ $driver->name }}" itemprop="name">
                                        <svg class="icon-svg-panel-sm d-inline" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#ff4242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#ff4242" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        {{ $driver->name }}
                                    </h3>

                                    <span
                                        class="smaller-Text" itemprop="identifier"> بروزرسانی : {{ verta($driver->updated_at)->format('%d %B %Y') }} </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card bg- mb-5 sticky-top shadow-sm">
                    <div class="card-header">
                        <svg class="icon-svg-panel" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 17.9827C4.44655 17.9359 3.51998 17.7626 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6H16C18.8284 6 20.2426 6 21.1213 6.87868C22 7.75736 22 9.17157 22 12C22 14.8284 22 16.2426 21.1213 17.1213C20.48 17.7626 19.5535 17.9359 18 17.9827" stroke="#ff4242" stroke-width="1.5"></path> <path opacity="0.5" d="M9 10H6" stroke="#ff4242" stroke-width="1.5" stroke-linecap="round"></path> <path d="M19 14L5 14" stroke="#ff4242" stroke-width="1.5" stroke-linecap="round"></path> <path d="M18 14V16C18 18.8284 18 20.2426 17.1213 21.1213C16.2426 22 14.8284 22 12 22C9.17157 22 7.75736 22 6.87868 21.1213C6 20.2426 6 18.8284 6 16V14" stroke="#ff4242" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M17.9827 6C17.9359 4.44655 17.7626 3.51998 17.1213 2.87868C16.2427 2 14.8284 2 12 2C9.17158 2 7.75737 2 6.87869 2.87868C6.23739 3.51998 6.06414 4.44655 6.01733 6" stroke="#ff4242" stroke-width="1.5"></path> <circle opacity="0.5" cx="17" cy="10" r="1" fill="#ff4242"></circle> <path opacity="0.5" d="M15 16.5H9" stroke="#ff4242" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M13 19H9" stroke="#ff4242" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                        محصولات</div>
                    @foreach(recentProducts(5) as $repost)
                        <div class="row g-0 sh-10 mt-1">
                            <div class="col-3 col-sm-3 h-100">
                                <img src="{{asset($repost->pic)}}" alt="{{$repost->name}}"
                                     class="card-img card-img-horizontal">
                            </div>
                            <div class="col-9 col-sm-9">
                                <div class="d-flex flex-column">
                                    <h4 title="{{$repost->name}}"><a class="heading mb-0 pe-2"
                                                                     href="{{asset('product/'.$repost->slug)}}">{{$repost->name}}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card bg- mb-5 sticky-bottom shadow-sm">
                    <div class="card-header">
                        <svg class="icon-svg-panel" fill="#ff4d4d" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="XMLID_1960_" d="M76,2H16c-2.2,0-4,1.8-4,4v80c0,2.2,1.8,4,4,4h60c2.2,0,4-1.8,4-4V6C80,3.8,78.2,2,76,2z M72,82H20V10h52 V82z M28.5,65c0-2.2,1.8-4,4-4h27c2.2,0,4,1.8,4,4s-1.8,4-4,4h-27C30.3,69,28.5,67.2,28.5,65z M29.1,46c0-2.2,1.8-4,4-4h26.3 c2.2,0,4,1.8,4,4s-1.8,4-4,4H33.1C30.9,50,29.1,48.2,29.1,46z M29.1,27c0-2.2,1.8-4,4-4h26.3c2.2,0,4,1.8,4,4s-1.8,4-4,4H33.1 C30.9,31,29.1,29.2,29.1,27z"></path> </g></svg>
                        تازه ها</div>
                    @foreach(recentPosts(5) as $repost)
                        <div class="row g-0 sh-10 mt-1">
                            <div class="col-3 col-sm-3 h-100">
                                <img src="{{asset($repost->pic)}}" alt="{{$repost->name}}"
                                     class="card-img card-img-horizontal">
                            </div>
                            <div class="col-9 col-sm-9">
                                <div class="d-flex flex-column">
                                    <h4 title="{{$repost->name}}"><a class="heading mb-0 pe-2"
                                                                     href="{{asset('post/'.$repost->slug)}}">{{$repost->name}}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script>
/*    function changStatus() {
        console.log('test');
        document.addEventListener('keydown', function (event) {
            // کد دکمه مد نظر را بررسی کنید
            if (event.keyCode === 13) { // کد 13 به معنای دکمه Enter است
                // پیدا کردن تگ div با استفاده از شناسه و مخفی کردن آن
                var div = document.getElementById('statusShow0');
                div.style.display = 'none';
            }
        });
    }*/
</script>
