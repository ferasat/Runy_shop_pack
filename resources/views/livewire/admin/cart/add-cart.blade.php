<div class="row py-5">
     <div class="col-md-8 m-auto ">
         <div class="card shadow-sm border-0 step1">
             <div class="card-header">
                 مشخصات مشتری
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-6">
                         <label for="customerSearch" class="form-label">نام و یا تلفن مشتری را وارد کنید</label>
                         <div class="input-group has-validation">

                             <input type="text" class="form-control" id="customerSearch" wire:model.live="customerSearch" required>
                             <div class="invalid-feedback">
                                 بیش از 3 حرف وارد کنید
                             </div>
                             <span class="input-group-text" id="customer_search">
                                 <button class="btn btn-runy-outline-primary" wire:click.prevent="customer_search()">جستجو</button>
                             </span>
                         </div>
                     </div>
                     <ul class="list-group col-md-6" id="customerList">
                         <label for="customerList" class="form-label">لیست مشتریان</label>
                         @foreach($customers as $customer)
                             <li class="list-group-item" wire:key="{{$customer->id}}">
                                 <input class="form-check-input" type="radio" name="customerSelect" value="{{$customer->id}}" wire:model.live="customerSelect" id="{{$customer->id}}">
                                 <label class="form-check-label" for="{{$customer->id}}">
                                     {{ $customer->name.' '.$customer->family .' '.$customer->cell }}
                                 </label>
                             </li>
                         @endforeach
                     </ul>
                 </div>
             </div>
             <div class="card-footer d-flex justify-content-between">
                 <button class="btn btn-runy-success btn-sm" wire:click.prevent="step1()" @if((strlen($customerSelect)>0))  @else disabled @endif>ادامه</button>
                 @if((strlen($customerSelect)>0)) @else <p class="text-danger">هنوز مشتری انتخاب نکردید</p> @endif
             </div>
         </div>
     </div>
</div>
