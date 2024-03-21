@extends('layouts.runyApp',['title'=>'تراکنش های بانکی','description'=>'تراکنش های بانکی'])

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
                    <div class="col-xl-12 col-md-12 mb-5">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"></th>
                                <th scope="col">مقدار</th>
                                <th scope="col">شناسه کاربر</th>
                                <th scope="col">وضعیت</th>
                                <th scope="col">نام کاربر</th>
                                <th scope="col">تاریخ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($allTransactions as $transaction)
                                <tr id="{{ $transaction->id }}">
                                    <th scope="row">{{ $transaction->id }}</th>
                                    <td>{{ $transaction->payment_id }}</td>
                                    <td>{{ $transaction->amount }}</td>
                                    <td>{{ $transaction->user_id  }}</td>
                                    <td>{{ runy_transaction_status($transaction->get_way , $transaction->status) }}</td>
                                    <td>
                                        @if( invoice_info_owner($transaction->invoice_id) != null )
                                            <a href="{{ asset('/dashboard/cart/show/'.invoice_info_owner($transaction->invoice_id)['cart_id']) }}">{{ invoice_info_owner($transaction->invoice_id)['owner'] }}</a>
                                        @else
                                            اطلاعی نیست
                                        @endif
                                    </td>
                                    <td>{{ verta($transaction->created_at)->format('%d %B %Y , H:i')  }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="">
                            {{ $allTransactions->links() }}
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

@endsection
