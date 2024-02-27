<div class="row ">
    <div class="col-md-12 d-flex justify-content-between">
        <div class="">
<!--            <label class="visually-hidden" for="searchCustomer">جستجو</label>
            <div class="input-group">
                <div class="input-group-text">جستجو</div>
                <input type="text" class="form-control" id="searchCustomer" wire:model="searchCustomer" placeholder="سه حرف وارد کنید">
            </div>-->
        </div>
        <div class="d-flex justify-content-start">
            <button type="button" class="btn btn-outline-primary d-block " data-bs-toggle="modal"
                    data-bs-target="#addCustomer">
                اضافه کردن مشتری
            </button>
            <!-- Modal  Launch static backdrop modal-->
            @livewire('admin.customer.add-customer' )

            <button class="d-block btn btn-outline-primary " wire:click="syncUsers()">همسان کردن</button>

        </div>
    </div>
    <div class="col-xl-12 mt-5 m-auto">
        <section class="" id="listCustom">
            @livewire('admin.customer.customer-table')
        </section>
    </div>

</div>
