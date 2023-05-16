<div class="col-12">
    @if(!$statusEdit)
    <div class="card m-b-30">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    آخرین اسلایدشو ها را می توانید در لیست زیر ببینید و آنها را مدیریت کنید .
                </div>
                <div class="col-2">
                    <button class="btn btn-primary" wire:click="add_new_slider()">اسلایدر جدید</button>
                </div>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>نام اسلایدر</th>
                        <th>نامک</th>
                        <th> شناسه</th>
                    </tr>
                    </thead>


                    <tbody class="table-striped">
                    @foreach($sliders as $slide)
                        <tr>
                            <td>
                                <a href="{{ asset('/dashboard/slideshow/edit/'.$slide -> id)  }}">{{ $slide -> name }}</a><br>
                                <small>
                                    <button wire:click="edit({{$slide -> id}})"
                                       class="badge badge-primary waves-effect waves-light">ویرایش</button>
                                    <a href="{{ asset('/dashboard/slideshow/destroy/'.$slide -> id) }}"
                                       class="badge badge-danger waves-effect waves-light">حذف</a>
                                    <a href="{{ asset('/dashboard/slideshow/copy/'.$slide -> id) }}"
                                       class="badge badge-warning waves-effect waves-light">رونوشت از اسلاید</a>


                                </small>
                            </td>

                            <td><span class="badge badge-info">{{ $slide -> slug }}</span></td>
                            <td><span class="badge badge-info">{{ $slide -> id }}</span></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer justify-content-lg-center text-center">
                {!! $sliders -> links() !!}
            </div>
        </div>
    </div>
    @else
        @livewire('admin.runy-slider.slider-edit' , ['slider_id'=>$slider_id ] , key(time().$slider_id))
    @endif
</div>
