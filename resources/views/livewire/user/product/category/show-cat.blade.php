<div class="row">
    <div class="col-md-9 mb-5">
        <div class="row">
            @foreach($taxs as $tax)
                <div class="col-md-3">
                    @livewire('user.product.category.show-cat-row' , ['tax'=>$tax , 'cat'=>$cat ])
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">فیلتر محصولات</div>
            <div class="card-body"></div>
            <div class="card-footer"></div>
        </div>
    </div>

</div>
