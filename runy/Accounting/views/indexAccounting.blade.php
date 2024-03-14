@extends('layouts.runyApp',['title'=>'تنظیمات حسابداری','description'=>'تنظیمات حسابداری'])
@section('content')

    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        @livewire('admin.accounting.index-accounting')
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
