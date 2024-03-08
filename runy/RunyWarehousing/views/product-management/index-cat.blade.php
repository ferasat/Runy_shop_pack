@extends('layouts.runyApp',['title'=>'مدیریت دستبندی محصولات انبار','description'=>'مدیریت انبار'])

@section('content')

    <div class="wrapper">
        @livewire('admin.theme.admin-cp-header' , ['menu'=>'cp'])
        @livewire('admin.rwms.product.index-category')
    </div>

    @livewire('admin.theme.admin-footer' , ['menu'=>'cp'])
@endsection
