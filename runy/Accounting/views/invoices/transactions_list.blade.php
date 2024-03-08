@extends('user.layouts.template')
@section('title' , 'تراکنش های بانکی')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            <div class="page-title-box">
                <div class="row align-items-center">

                </div>

            </div>
        </div>
    </div>

    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header"><h4 class="mt-0 header-title">تراکنش های بانکی</h4></div>
                <div class="card-body">
                    @livewire('admin.invoice.transactions-datatable' , ['searchable'=>"subject, owner"])
                </div>
            </div>

        </div>
    </div>
@endsection
