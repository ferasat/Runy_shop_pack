<div class="container">
    <div class="row py-3">
        <div class="col-md-6">
            <h2>مدیریت محصولات انبار</h2>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                اضافه کردن محصول
                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" id="_003_ECOMMERCE_03" data-name="003_ECOMMERCE_03" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>003_085</title><path d="M11,21H4a.99974.99974,0,0,1-1-1V4A.99974.99974,0,0,1,4,3H20a.99974.99974,0,0,1,1,1v7a1,1,0,0,1-2,0V5H5V19h6a1,1,0,0,1,0,2Z" style="fill:#fafafa"></path><polygon points="10 4 10 10 12 8 14 10 14 4 10 4" style="fill:#fafafa"></polygon><path d="M17,21a.99974.99974,0,0,1-1-1V14a1,1,0,0,1,2,0v6A.99974.99974,0,0,1,17,21Z" style="fill:#fafafa"></path><path d="M20,18H14a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z" style="fill:#fafafa"></path></g></svg>
            </button>
            <a target="_blank" class="btn btn-primary mx-2" href="{{ asset(route('rwmp.cat.index')) }}">
                مدیریت دستبندی محصولات
                <svg class="icon-svg-panel-sm" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 4.5L4.5 3.75H10.5L11.25 4.5V10.5L10.5 11.25H4.5L3.75 10.5V4.5ZM5.25 5.25V9.75H9.75V5.25H5.25ZM13.5 3.75L12.75 4.5V10.5L13.5 11.25H19.5L20.25 10.5V4.5L19.5 3.75H13.5ZM14.25 9.75V5.25H18.75V9.75H14.25ZM17.25 20.25H15.75V17.25H12.75V15.75H15.75V12.75H17.25V15.75H20.25V17.25H17.25V20.25ZM4.5 12.75L3.75 13.5V19.5L4.5 20.25H10.5L11.25 19.5V13.5L10.5 12.75H4.5ZM5.25 18.75V14.25H9.75V18.75H5.25Z" fill="#fafafa"></path> </g></svg>
            </a>
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
                            <th scope="row" data-bs-toggle="modal" data-bs-target="#editProduct{{ $product->id }}">
                                {{ $product->id }}

                            </th>
                            <td class="text-center" data-bs-toggle="modal" data-bs-target="#editProduct{{ $product->id }}">
                                <img src="{{ asset($product->pic) }}" class="rounded w-90px mx-auto">
                            </td>
                            <td data-bs-toggle="modal" data-bs-target="#editProduct{{ $product->id }}">{{ $product->name }}</td>
                            <td>{{ $product->wm_id }}</td>
                            <td>{{ $product->price }} {{ $product->current }}</td>
                            <td>{{ $product->input_stock }}</td>
                            <td>{{ $product->status }}</td>
                            <td>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#product{{$product->id}}">
                                    <svg  fill="#000000" viewBox="0 0 24 24" id="delete-alt" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon-svg-panel-sm"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path id="secondary" d="M16,7V4a1,1,0,0,0-1-1H9A1,1,0,0,0,8,4V7m2,4v6m4-6v6" style="fill: none; stroke: #d68585; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary" d="M4,7H20M18,20V7H6V20a1,1,0,0,0,1,1H17A1,1,0,0,0,18,20Z" style="fill: none; stroke: #ff0000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></g></svg>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="product{{$product->id}}" tabindex="-1" aria-labelledby="product{{$product->id}}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="product{{$product->id}}Label">حذف کردن محصول</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                اطلاعات این محصول بصورت کامل پاک می شود و در دسترس نخواد بود. آیا مطمئن هستید ؟
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                                                <button type="button" wire:click.prevent="delete({{ $product->id }})" class="btn btn-danger" data-bs-dismiss="modal">حذف کن</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>


                        <!-- Modal Edit -->
                        <div wire:ignore="" class="modal fade" id="editProduct{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProduct{{ $product->id }}Label" aria-hidden="true">
                            <div class="modal-dialog  modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editProduct{{ $product->id }}Label">نمایش محصول: {{ $product->name }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @livewire('admin.rwms.product.edit-product' , ['product'=>$product])
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                    <caption>{{ $products->links() }}</caption>
                </table>
            </div>
        </div>
    </div>
</div>
