<div class="col-xl-8">
    <section class="scroll-section p-2 m-2" id="listPost">
        <div class="card mb-3">
            <div class="card-body mb-n2 border-last-none h-100">
                <div class="mb-3">
                    <label class="form-label">عنوان</label>
                    <input type="text" class="form-control" name="subject" wire:model.live.blur="subject">

                </div>
                <div class="mb-3">
                    <label class="form-label">نوع اکشن</label>
                    <select class="form-control" name="type_action" wire:model.live.blur="type_action">
                        <option value="periodic">دوره ای</option>
                        <option value="once">یکبار مصرف</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label class="form-label">نوع </label>
                    <select class="form-control" name="type_item" wire:model.live.blur="type_item">
                        <option value="product">محصول</option>
                        <option value="service">خدمات</option>
                        <option value="manual">دستی</option>
                    </select>

                </div>
                <div class="mb-3">
                    <label class="form-label">شناسه محصول </label>
                    <select class="form-control" name="product_id" wire:model.live.blur="product_id">
                        @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-3">
                    <label class="form-label">متن SMS ارسالی</label>
                    <textarea class="form-control editor" id="editor2"
                              name="text_sms" wire:model.live.blur="text_sms"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">به مشتری </label>
                    <select class="form-control" name="customer_id" wire:model.live.blur="customer_id">
                        <option value=""></option>
                        @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" wire:click.privent="save()">ایجاد</button>
                </div>
            </div>
        </div>

    </section>
</div>


