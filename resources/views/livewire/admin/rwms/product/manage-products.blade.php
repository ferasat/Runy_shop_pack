<div class="container">
    <div class="row py-3">
        <div class="col-md-6">
            <h2>مدیریت محصولات انبار</h2>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                اضافه کردن محصول
            </button>
            <div wire:ignore="" class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
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
                        <th scope="col">عملیات</th>
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
                            <td>
                                <button class="btn" wire:click.prevent="delete({{ $product->id }})">
                                    <svg  fill="#000000" viewBox="0 0 24 24" id="delete-alt" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon-svg-panel-sm"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="secondary" d="M16,7V4a1,1,0,0,0-1-1H9A1,1,0,0,0,8,4V7m2,4v6m4-6v6" style="fill: none; stroke: #d68585; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary" d="M4,7H20M18,20V7H6V20a1,1,0,0,0,1,1H17A1,1,0,0,0,18,20Z" style="fill: none; stroke: #ff0000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></g></svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <caption>{{ $products->links() }}</caption>
                </table>
            </div>
        </div>
    </div>
</div>
