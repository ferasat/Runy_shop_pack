@extends('layouts.runyApp',['title'=>'نرم افزار مدیریت انبار','description'=>'مدیریت انبار'])

@section('content')

    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="my-3 py-2 h2">
                        <svg class="icon-svg-panel" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>Ecommerce copia 3</title><polygon points="80 48.04 80 92.04 74 92.04 74 73.29 62.26 73.29 62.26 54.29 38.26 54.29 38.26 73.29 26 73.29 26 92.04 20 92.04 20 48.04 80 48.04" fill="#e1f6fa"></polygon><polygon points="66.5 74.19 66.5 84.19 62 80.02 57.5 84.19 57.5 74.19 66.5 74.19" fill="#9ae3f0"></polygon><polygon points="54.76 55.19 54.76 65.19 50.26 61.02 45.76 65.19 45.76 55.19 54.76 55.19" fill="#9ae3f0"></polygon><polygon points="42.5 74.19 42.5 84.19 38 80.02 33.5 84.19 33.5 74.19 42.5 74.19" fill="#9ae3f0"></polygon><rect x="20" y="47.04" width="60" height="2" fill="#6c429a"></rect><path d="M91,93H79V35H21V93H9V35H5V25.37l0.62-.25L50,7l0.38,0.15L95,25.37V35H91V93ZM81,91h8V33h4V26.71L50,9.12,7,26.71V33h4V91h8V33H81V91Z" fill="#6c429a"></path><rect x="20" y="40.04" width="60" height="2" fill="#6c429a"></rect><path d="M74,93H26a1,1,0,0,1-1-1V73.29a1,1,0,0,1,1-1H74a1,1,0,0,1,1,1V92A1,1,0,0,1,74,93ZM27,91H73V74.29H27V91Z" fill="#6c429a"></path><rect x="49" y="73.29" width="2" height="19.5" fill="#6c429a"></rect><path d="M63.26,73.79h-2V55.29h-22v18.5h-2V54.29a1,1,0,0,1,1-1h24a1,1,0,0,1,1,1v19.5Z" fill="#6c429a"></path><rect width="100" height="100" fill="none"></rect></g></svg>
                        نرم افزار مدیریت انبار
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="">گزارش محصولات
                                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z" stroke="#6c429a" stroke-width="1.5"></path> <path d="M8 12H16" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 8H16" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 16H13" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            </div>
                            <div class="">
                                <a target="_blank" href="{{ asset('/dashboard/warehousing/products/') }}" class="btn btn-primary">مدیریت محصولات
                                    <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 10C4 6.22876 4 4.34315 5.17157 3.17157C6.34315 2 8.22876 2 12 2C15.7712 2 17.6569 2 18.8284 3.17157C20 4.34315 20 6.22876 20 10V14C20 17.7712 20 19.6569 18.8284 20.8284C17.6569 22 15.7712 22 12 22C8.22876 22 6.34315 22 5.17157 20.8284C4 19.6569 4 17.7712 4 14V10Z" stroke="#ffffff" stroke-width="1.5"></path> <path opacity="0.5" d="M15 19H9" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M16.7481 2.37793L16.664 2.5041C15.908 3.63818 15.5299 4.20525 14.9778 4.54836C14.868 4.61658 14.7539 4.67764 14.6362 4.73115C14.0444 5.00025 13.3629 5.00025 11.9999 5.00025C10.6369 5.00025 9.95539 5.00025 9.36363 4.73115C9.24596 4.67764 9.13187 4.61658 9.02207 4.54836C8.46992 4.20524 8.09189 3.6382 7.33582 2.5041L7.25171 2.37793" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @livewire('admin.rwms.report.short-report-product')
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="">گزراش انبار ها
                                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z" stroke="#6c429a" stroke-width="1.5"></path> <path d="M8 12H16" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 8H16" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 16H13" stroke="#6c429a" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            </div>
                            <div class="">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addW">
                                    اضافه کردن انبار
                                    <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 14H12M12 14H14M12 14V16M12 14V12" stroke="#fafafa" stroke-width="1.5" stroke-linecap="round"></path> <path d="M22 11.7979C22 9.16554 22 7.84935 21.2305 6.99383C21.1598 6.91514 21.0849 6.84024 21.0062 6.76946C20.1506 6 18.8345 6 16.2021 6H15.8284C14.6747 6 14.0979 6 13.5604 5.84678C13.2651 5.7626 12.9804 5.64471 12.7121 5.49543C12.2237 5.22367 11.8158 4.81578 11 4L10.4497 3.44975C10.1763 3.17633 10.0396 3.03961 9.89594 2.92051C9.27652 2.40704 8.51665 2.09229 7.71557 2.01738C7.52976 2 7.33642 2 6.94975 2C6.06722 2 5.62595 2 5.25839 2.06935C3.64031 2.37464 2.37464 3.64031 2.06935 5.25839C2 5.62595 2 6.06722 2 6.94975M21.9913 16C21.9554 18.4796 21.7715 19.8853 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V11" stroke="#fafafa" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="addW" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addWLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="addWLabel">تعریف انبار</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @livewire('admin.rwms.warehousing.add-warehousing')
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @livewire('admin.rwms.report.short-report-warehousing')
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
