<div class="container">
    <div class="row">
        <div class="col-12">
            @livewire('user.theme.breadcrumbs' , compact('breadcrumbs'))
        </div>
    </div>
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-9">
            <div class=" d-lg-flex justify-content-between bg-light py-3 px-4 job-item align-items-center mb-4 ">

            </div>
            <!-- Featured blog post-->
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($taxs as $tax)
                    <div class="col">

                        @livewire('user.product.category.show-cat-row' , ['tax'=>$tax , 'cat'=>$cat ])

                    </div>
                @endforeach

            </div>

            <!-- Pagination-->
            <div class="row">
                <div class="col pt-2">
                    {{ $taxs->links() }}
                </div>
            </div>

        </div>
        <!-- Side widgets-->
        <div class="col-lg-3">
            <!-- Search widget-->
            <div class="card mb-4 sticky-top">
                <div class="card-header">جستجوی محصول</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" wire:model="search"
                               placeholder="نام محصول مورد نظر خود را بنویسید"/>
                        <button class="btn btn-primary" id="button-search" wire:click.prevent="searchBtn()">جستجو
                        </button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            @livewire('user.theme.sidebar.products-brands')
        </div>
    </div>
</div>
