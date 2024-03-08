@extends('user.layouts.template')
@section('title' , 'تنظیمات حسابداری')
@section('content')
    <!-- Page-Title -->
    @include('user.layouts.breadcrumb')
    @livewire('admin.accounting.index-accounting')
@endsection
