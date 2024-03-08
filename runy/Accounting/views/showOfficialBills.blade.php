@extends('user.layouts.template')
@section('title' , 'نمایش اطلاعات فاکتور رسمی')
@section('content')
    <!-- Page-Title -->
    @include('user.layouts.breadcrumb')
    @livewire('admin.tour.cip.show-official-bills',compact('reserve'))
@endsection
