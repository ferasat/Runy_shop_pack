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

                <div class="d-flex btn-group col-3 p-2 rounded text-danger">
                    <label class="visually-hidden" for="autoSizingSelect">مرتب سازی بر اساس</label>
                    <select class="form-select" id="autoSizingSelect">
                        <option selected>با کیفیت ترین</option>
                        <option value="1">گران ترین</option>
                        <option value="2">ارزان ترین</option>
                        <option value="3">جدید ترین</option>
                    </select>
                </div>
                <a href="" class="btn btn-primary  mt-3 mt-lg-0">مرتب سازی بر اساس</a>
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
            <div class="card mb-4">
                <div class="card-header">جستجوی محصول</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="نام محصول مورد نظر خود را بنویسید"
                               aria-label="Enter search term..." aria-describedby="button-search"/>
                        <button class="btn btn-primary" id="button-search" type="button">جستجو</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">برند</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-check">
                                <label for="flexRadioDefault6">
                                </label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault6">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    HP
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault5" checked>

                                    Sumsung
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault7">
                                    brother
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">رنگ</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault4">

                                    سفید
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault3" checked>

                                    مشکی
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">کاربری</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    تک کاربر
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    چند کاربر
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
