@extends('layouts.runyApp',['title'=>'لاگ','description'=>'لاگ'])

@section('content')

    <div class="wrapper default ">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])

        <div class="container">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row justify-content-center">
                    <!-- Title Start -->
                    <div class="col-9 col-md-9">
                        <h4 class="my-2 py-3" id="title">لاگ فعالیت ها در نرم افزار</h4>
                    </div>
                    <!-- Title End -->
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 mb-5">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">توضیحات</th>
                                <th scope="col">نوع</th>
                                <th scope="col">رویداد</th>
                                <th scope="col">نام کاربر</th>
                                <th scope="col">تاریخ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($logs as $log)
                                <tr>
                                    <th scope="row">{{ $log->id }}</th>
                                    <td>{{ $log->log_name }}</td>
                                    <td>{{ $log->description }}</td>
                                    <td>{{ $log->type_id .'->'.$log->type }}</td>
                                    <td>{{ $log->event }}</td>
                                    <td>{{ fullName($log->causer_id) }}</td>
                                    <td>{{ verta($log->created_at)->format('%d %B %Y , H:i')  }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="">
                            {{ $logs->links() }}
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

@endsection
