<div class="card">
    <div class="card-header">حساب کاربری</div>
    <div class="card-body">
        <div id="loginForm" class="">
            @csrf
            <div class="row">
                <div class="mb-3 form-group col-md-6">
                    <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path opacity="0.4"
                                  d="M12.1605 10.87C12.0605 10.86 11.9405 10.86 11.8305 10.87C9.45055 10.79 7.56055 8.84 7.56055 6.44C7.56055 3.99 9.54055 2 12.0005 2C14.4505 2 16.4405 3.99 16.4405 6.44C16.4305 8.84 14.5405 10.79 12.1605 10.87Z"
                                  stroke="#6c429a " stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path
                                d="M7.1607 14.56C4.7407 16.18 4.7407 18.82 7.1607 20.43C9.9107 22.27 14.4207 22.27 17.1707 20.43C19.5907 18.81 19.5907 16.17 17.1707 14.56C14.4307 12.73 9.9207 12.73 7.1607 14.56Z"
                                stroke="#6c429a " stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <label>نام:</label>
                    <input class="form-control pe-7" placeholder="نام " name="name" wire:model="name">
                    @error('name')
                    <div id="email-error" class="error">این گزینه اجباری است.</div>@enderror
                </div>
                <div class="mb-3 filled form-group col-md-6">
                    <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path opacity="0.4"
                                  d="M12.1605 10.87C12.0605 10.86 11.9405 10.86 11.8305 10.87C9.45055 10.79 7.56055 8.84 7.56055 6.44C7.56055 3.99 9.54055 2 12.0005 2C14.4505 2 16.4405 3.99 16.4405 6.44C16.4305 8.84 14.5405 10.79 12.1605 10.87Z"
                                  stroke="#6c429a " stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path
                                d="M7.1607 14.56C4.7407 16.18 4.7407 18.82 7.1607 20.43C9.9107 22.27 14.4207 22.27 17.1707 20.43C19.5907 18.81 19.5907 16.17 17.1707 14.56C14.4307 12.73 9.9207 12.73 7.1607 14.56Z"
                                stroke="#6c429a " stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <label>نام خانوادگی:</label>
                    <input class="form-control" placeholder="نام خانوادگی" name="family" wire:model="family">
                    @error('family')
                    <div id="family-error" class="error">این گزینه اجباری است.</div>@enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 filled form-group col-md-6">
                    <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z"
                                stroke="#6c429a " stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path opacity="0.4" d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9"
                                  stroke="#6c429a " stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <label>ایمیل:</label>
                    <input class="form-control pe-7" placeholder="ایمیل اختیاری است" name="email" wire:model="email" disabled>
                    @error('email')
                    <div id="email-error" class="error">فرمت ایمیل را درست وارد نکردید</div>@enderror
                </div>
                <div class="mb-3 filled form-group col-md-6">
                    <svg class="icon-svg-panel-sm" fill="#6c429a" version="1.1" id="Capa_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 540.588 540.588" xml:space="preserve"><g id="SVGRepo_bgCarrier"
                                                                               stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path
                                        d="M420.588,503.896V36.682C420.588,16.457,404.131,0,383.906,0H156.682C136.457,0,120,16.457,120,36.682v467.215 c0,20.225,16.457,36.691,36.682,36.691h227.224C404.131,540.588,420.588,524.131,420.588,503.896z M406.244,503.896 c0,12.326-10.012,22.348-22.338,22.348H156.682c-12.307,0-22.338-10.021-22.338-22.348V36.682 c0-12.307,10.031-22.338,22.338-22.338h227.224c12.326,0,22.338,10.031,22.338,22.338V503.896L406.244,503.896z"></path>
                                    <path
                                        d="M388.468,59.651H152.13c-1.979,0-3.586,1.606-3.586,3.586V473.41c0,1.98,1.606,3.586,3.586,3.586h236.337 c1.979,0,3.586-1.605,3.586-3.586V63.237C392.054,61.257,390.447,59.651,388.468,59.651z M375.319,469.824H165.279 c-5.279,0-9.562-4.283-9.562-9.562V76.385c0-5.279,4.284-9.562,9.562-9.562h210.041c5.278,0,9.562,4.284,9.562,9.562v383.876 C384.882,465.541,380.598,469.824,375.319,469.824z"></path>
                                    <path
                                        d="M250.127,37.81h40.344c1.979,0,3.586-1.606,3.586-3.586s-1.606-3.586-3.586-3.586h-40.344 c-1.979,0-3.586,1.606-3.586,3.586S248.147,37.81,250.127,37.81z"></path>
                                    <path
                                        d="M290.949,485.191h-41.311c-8.481,0-15.386,6.904-15.386,15.377v2.467c0,8.482,6.914,15.387,15.386,15.387h41.311 c8.481,0,15.386-6.914,15.386-15.387v-2.467C306.345,492.096,299.431,485.191,290.949,485.191z M299.173,503.035 c0,4.533-3.682,8.215-8.214,8.215h-41.311c-4.522,0-8.214-3.691-8.214-8.215v-2.467c0-4.523,3.7-8.205,8.214-8.205h41.311 c4.542,0,8.214,3.691,8.214,8.205V503.035z"></path>
                                    <path
                                        d="M210.328,327.268c-1.635,4.857-5.221,8.836-5.977,10.193c-0.498,0.908-0.564,1.893-0.382,2.715 c0.172,0.709,0.994,3.012,4.293,3.012c3.461,0,22.156-3.805,33.364-13.348c4.025-3.424,7.478-7.373,9.122-7.545 c1.654-0.182,5.25,3.318,9.037,7c7.774,7.572,18.962,13.07,31.91,15.566c5.183,0.994,11.666,5.068,15.815,8.33 c10.031,7.869,25.609,11.035,28.573,11.035c2.582,0,3.863-1.551,4.198-3.004c0.191-0.803,0.134-1.768-0.345-2.658 c-0.707-1.338-3.844-4.781-5.211-8.836c-1.368-4.055,1.932-8.758,6.636-11.158c15.645-8.004,25.293-21.248,25.293-35.641 c0-23.943-26.594-43.432-59.259-43.432c-0.287,0-0.583,0.009-0.87,0.019c-0.479,0.019-2.133-3.529-4.647-7.401 c-1.463-2.267-3.193-4.447-5.173-6.531c-12.384-12.986-33.23-20.75-55.75-20.75c-36.959,0-67.052,21.984-67.052,49.008 c0,16.686,11.523,31.996,30.103,40.928C208.788,317.045,211.953,322.408,210.328,327.268z M308.611,270.18 c-0.163-1.798,3.872-3.262,9.094-2.526c23.657,3.329,41.511,17.883,41.511,35.276c0,14.594-12.584,27.656-32.082,33.27 c-1.903,0.553-3.041,2.484-2.592,4.398c0.622,2.715,1.253,5.201,1.894,7.439c1.167,4.082-1.74,6.195-6.531,3.996 c-5.909-2.715-11.102-6.416-12.899-10.881c-0.526-1.35-1.808-2.258-3.252-2.334c-13.837-0.68-26.153-4.781-34.894-11.369 c-4.217-3.176-2.668-7.508,2.295-9.305c22.616-8.176,37.601-25.494,37.601-44.705C308.755,272.359,308.707,271.27,308.611,270.18z M291.341,250.709c6.427,6.761,9.64,14.697,9.229,22.941c-1.062,22.232-24.882,40.123-55.396,41.625 c-1.435,0.066-2.726,0.984-3.271,2.324c-2.391,5.957-9.84,10.547-17.232,13.627c-4.877,2.027-7.449-0.729-6.034-5.633 c0.775-2.678,1.54-5.662,2.295-8.941c0.449-1.922-0.688-3.863-2.592-4.408c-22.472-6.475-36.959-21.555-36.959-38.422 c0-22.921,26.728-41.568,59.594-41.568C261.496,232.273,280.325,239.158,291.341,250.709z"></path>
                                    <path
                                        d="M207.163,287.535c-1.951-0.545-3.596-0.746-3.882,0.162c-0.287,0.908,1.052,2.611,3.222,3.137 c1.282,0.307,2.668,0.496,4.007,0.496c7.172,0,10.605-4.102,10.605-8.787c0-4.455-2.582-6.941-7.717-8.922 c-4.198-1.615-6.053-3.021-6.053-5.862c0-2.065,1.587-4.552,5.737-4.552c1.109,0,2.104,0.144,2.955,0.345 c1.597,0.382,3.002,0.382,3.299-0.507c0.296-0.88-0.832-2.372-2.706-2.754c-0.995-0.201-2.142-0.325-3.423-0.325 c-5.9,0-9.821,3.509-9.821,8.243c0,4.237,3.06,6.856,8.033,8.655c4.092,1.539,5.718,3.203,5.718,5.996 c0,3.068-2.333,5.182-6.35,5.182C209.524,288.041,208.291,287.859,207.163,287.535z"></path>
                                    <path
                                        d="M230.619,271.105c0.163-3.709,0.937-4.044,1.922-0.783c0.564,1.865,1.195,3.824,1.874,5.871c0,0,1.109,3.242,2.478,7.238 c1.367,3.998,3.136,7.24,3.958,7.24c0.823,0,2.688-3.299,4.18-7.373l2.687-7.373c0.727-1.998,1.387-3.91,1.989-5.746 c1.052-3.185,1.912-2.85,2.085,0.773c0.104,2.219,0.22,4.494,0.334,6.561c0,0,0.163,2.982,0.363,6.664 c0.201,3.682,1.233,6.666,2.295,6.666c1.071,0,1.664-4.275,1.339-9.543l-0.698-11.285c-0.324-5.268-1.711-9.543-3.098-9.543 s-3.71,3.29-5.202,7.344l-2.696,7.343c-0.641,1.799-1.215,3.48-1.731,5.088c-0.908,2.82-2.161,2.84-3.031,0.01 c-0.497-1.625-1.042-3.318-1.645-5.098c0,0-1.157-3.289-2.592-7.343c-1.424-4.055-3.71-7.344-5.087-7.344 s-2.802,4.275-3.175,9.543l-0.793,11.293c-0.373,5.27,0.163,9.545,1.195,9.545s2.056-2.918,2.276-6.514l0.411-6.512 C230.409,275.619,230.523,273.324,230.619,271.105z"></path>
                                    <path
                                        d="M265.646,287.535c-1.95-0.545-3.586-0.746-3.873,0.162c-0.286,0.908,1.053,2.611,3.223,3.137 c1.272,0.307,2.668,0.496,4.007,0.496c7.153,0,10.586-4.102,10.586-8.787c0-4.455-2.582-6.941-7.717-8.922 c-4.188-1.615-6.034-3.021-6.034-5.862c0-2.065,1.568-4.552,5.719-4.552c1.118,0,2.113,0.144,2.964,0.345 c1.606,0.392,3.013,0.382,3.309-0.507c0.297-0.88-0.832-2.372-2.706-2.754c-0.994-0.201-2.151-0.325-3.433-0.325 c-5.9,0-9.821,3.509-9.821,8.243c0,4.237,3.079,6.856,8.033,8.655c4.111,1.539,5.718,3.203,5.718,5.996 c0,3.068-2.333,5.182-6.35,5.182C267.999,288.041,266.775,287.859,265.646,287.535z"></path>
                                </g>
                            </g>
                        </g></svg>
                    <label>شماره همراه:</label>
                    <input class="form-control pe-7" placeholder="شماره همراه" name="cellPhone" wire:model="cellPhone" disabled>
                    @error('cellPhone')
                    <div id="cellPhone-error" class="error">این گزینه اجباری است.</div>@enderror
                </div>
            </div>
            <div class="row">
                <div class="mb-3 filled form-group col-md-6">
                    <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path opacity="0.4"
                                  d="M12.1605 10.87C12.0605 10.86 11.9405 10.86 11.8305 10.87C9.45055 10.79 7.56055 8.84 7.56055 6.44C7.56055 3.99 9.54055 2 12.0005 2C14.4505 2 16.4405 3.99 16.4405 6.44C16.4305 8.84 14.5405 10.79 12.1605 10.87Z"
                                  stroke="#6c429a " stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <path
                                d="M7.1607 14.56C4.7407 16.18 4.7407 18.82 7.1607 20.43C9.9107 22.27 14.4207 22.27 17.1707 20.43C19.5907 18.81 19.5907 16.17 17.1707 14.56C14.4307 12.73 9.9207 12.73 7.1607 14.56Z"
                                stroke="#6c429a " stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <label>نام کاربری:</label>
                    <input class="form-control pe-7" placeholder="ایمیل اختیاری است" name="email" wire:model="email"
                           disabled>
                    @error('username')
                    <div id="email-error" class="error">فرمت ایمیل را درست وارد نکردید</div>@enderror
                </div>
                <div class="mb-3 filled form-group col-md-6">
                    <svg class="icon-svg-panel-sm" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                         fill="#6c429a">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"></path>
                        </g>
                    </svg>
                    <label>کدپستی:</label>
                    <input class="form-control pe-7" placeholder="کدپستی" name="zip_code" wire:model="zip_code">
                    @error('zip_code')
                    <div id="cellPhone-error" class="error">این گزینه اجباری است.</div>@enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 my-3">
                    <svg class="icon-svg-panel-sm" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                         fill="#6c429a">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M7 7V1.414a1 1 0 0 1 2 0V2h5a1 1 0 0 1 .8.4l.975 1.3a.5.5 0 0 1 0 .6L14.8 5.6a1 1 0 0 1-.8.4H9v10H7v-5H2a1 1 0 0 1-.8-.4L.225 9.3a.5.5 0 0 1 0-.6L1.2 7.4A1 1 0 0 1 2 7h5zm1 3V8H2l-.75 1L2 10h6zm0-5h6l.75-1L14 3H8v2z"></path>
                        </g>
                    </svg>
                    <label>آدرس:</label>
                    <input class="form-control pe-7" placeholder="نشانی" name="address" wire:model="address">
                    @error('address')
                    <div id="cellPhone-error" class="error">این گزینه اجباری است.</div>@enderror
                </div>
            </div>


            <div class="row">
                <div class="mb-3 filled form-group col-md-6">
                    <div class="w-100px">
                        @if($pic_pr)
                            <img src="{{ $pic_pr->temporaryUrl() }}" alt="" class="w-100 rounded">
                        @else
                            <img src="{{ asset($user->pic) }}" alt="" class="w-100 rounded">
                        @endif
                    </div>
                </div>
                <div class="mb-3 filled form-group col-md-6">
                    <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M17 21H7C3 21 2 20 2 16V8C2 4 3 3 7 3H17C21 3 22 4 22 8V16C22 20 21 21 17 21Z"
                                  stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                            <g opacity="0.4">
                                <path d="M14 8H19" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M15 12H19" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path d="M17 16H19" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                                <path
                                    d="M8.50043 11.2899C9.50007 11.2899 10.3104 10.4796 10.3104 9.47992C10.3104 8.48029 9.50007 7.66992 8.50043 7.66992C7.50079 7.66992 6.69043 8.48029 6.69043 9.47992C6.69043 10.4796 7.50079 11.2899 8.50043 11.2899Z"
                                    stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path
                                    d="M12 16.3298C11.86 14.8798 10.71 13.7398 9.26 13.6098C8.76 13.5598 8.25 13.5598 7.74 13.6098C6.29 13.7498 5.14 14.8798 5 16.3298"
                                    stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </g>
                    </svg>
                    <label>تصویر:</label>
                    <input type="file" class="form-control pe-7" name="pic_pr" wire:model="pic_pr">
                    @error('pic_pr')
                    <div id="cellPhone-error" class="error">این گزینه اجباری است.</div>@enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <button type="submit" class="btn w-50 btn-primary mx-auto" wire:click="save()">ذخیره</button>
                </div>
            </div>

        </div>
    </div>
    <div class="card-body border-top">
        <div class="changePass my-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 filled form-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                             fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                             stroke-linejoin="round" class="cs-icon cs-icon-lock-off">
                            <path
                                d="M5 12.6667C5 12.0467 5 11.7367 5.06815 11.4824C5.25308 10.7922 5.79218 10.2531 6.48236 10.0681C6.73669 10 7.04669 10 7.66667 10H12.3333C12.9533 10 13.2633 10 13.5176 10.0681C14.2078 10.2531 14.7469 10.7922 14.9319 11.4824C15 11.7367 15 12.0467 15 12.6667V13C15 13.9293 15 14.394 14.9231 14.7804C14.6075 16.3671 13.3671 17.6075 11.7804 17.9231C11.394 18 10.9293 18 10 18V18C9.07069 18 8.60603 18 8.21964 17.9231C6.63288 17.6075 5.39249 16.3671 5.07686 14.7804C5 14.394 5 13.9293 5 13V12.6667Z"></path>
                            <path
                                d="M11 15H10 9M13 6V5C13 3.34315 11.6569 2 10 2V2C8.34315 2 7 3.34315 7 5V10"></path>
                        </svg>
                        <label>رمزجدید:</label>
                        <input class="form-control pe-7" name="password" type="password" wire:model="password"
                               placeholder="رمز">
                        @error('password')
                        <div id="cellPhone-error" class="error">این گزینه اجباری است.</div>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 filled form-group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                             fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                             stroke-linejoin="round" class="cs-icon cs-icon-lock-off">
                            <path
                                d="M5 12.6667C5 12.0467 5 11.7367 5.06815 11.4824C5.25308 10.7922 5.79218 10.2531 6.48236 10.0681C6.73669 10 7.04669 10 7.66667 10H12.3333C12.9533 10 13.2633 10 13.5176 10.0681C14.2078 10.2531 14.7469 10.7922 14.9319 11.4824C15 11.7367 15 12.0467 15 12.6667V13C15 13.9293 15 14.394 14.9231 14.7804C14.6075 16.3671 13.3671 17.6075 11.7804 17.9231C11.394 18 10.9293 18 10 18V18C9.07069 18 8.60603 18 8.21964 17.9231C6.63288 17.6075 5.39249 16.3671 5.07686 14.7804C5 14.394 5 13.9293 5 13V12.6667Z"></path>
                            <path
                                d="M11 15H10 9M13 6V5C13 3.34315 11.6569 2 10 2V2C8.34315 2 7 3.34315 7 5V10"></path>
                        </svg>
                        <label>تاییدرمز:</label>
                        <input class="form-control pe-7" name="password" type="password" wire:model="password_accept"
                               placeholder="تایید رمز">
                        @error('password_accept')
                        <div id="cellPhone-error" class="error">این گزینه اجباری است.</div>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <button type="submit" class="btn w-50 btn-primary mx-auto" wire:click="changePass()">تغییر رمز</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <p class="py-2 bg-info rounded">
            {{ $showMsg }}
        </p>
    </div>

</div>
