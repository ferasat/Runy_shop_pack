<div class="container">
    <div class="row py-3">
        <div class="col-md-6">
            <h2>مدیریت محصولات انبار</h2>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                اضافه کردن محصول
            </button>
            <div class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="addProductLabel">اضافه کردن محصول</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @livewire('admin.rwms.product.add-product')
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 m-auto mt-3">
            <div class="table-responsive">
                <table class="table table-hover table-striped-columns">
                    <thead>
                    <tr>
                        <th scope="col">شناسه</th>
                        <th scope="col">تصویر</th>
                        <th scope="col">نام</th>
                        <th scope="col">انبار</th>
                        <th scope="col">قیمت</th>
                        <th scope="col">موجودی</th>
                        <th scope="col">وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td><img src="{{ asset($product->pic) }}" ></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->wm_id }}</td>
                            <td>{{ $product->price }} {{ $product->current }}</td>
                            <td>{{ $product->input_stock }}</td>
                            <td>{{ $product->status }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <caption>List of users</caption>
                </table>
            </div>
        </div>
    </div>
</div>
