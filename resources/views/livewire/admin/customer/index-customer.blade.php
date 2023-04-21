<div class="">
    <div class="row ">
        <div class="col-xl-8 mb-5">
            <section class="scroll-section" id="listPost">

                <div class="card h-100-card">
                    <div class="card-body mb-n2 border-last-none h-100">
                        @foreach($customers as $customer)
                            @livewire('admin.customer.row-customer' , [ 'customer' => $customer ]  , key($customer->id))
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <div class="col-xl-4 mb-5">
            <div class="card ">
                <div class="card-header">دسترسی ها</div>
                <div class="card-body mb-n2 border-last-none">

                    <!-- Button Trigger -->
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#addCustomer">
                        اضافه کردن مشتری
                    </button>
                    <!-- Modal  Launch static backdrop modal-->
                    @livewire('admin.customer.add-customer' )

                </div>
            </div>
        </div>
    </div>

</div>
