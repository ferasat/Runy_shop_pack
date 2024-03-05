<div class="row">
     <div class="col-12">
         <div class="mb-3">
             <label for="title" class="form-label">نام انبار</label>
             <input type="text" class="form-control" id="title" wire:model="title" placeholder="نام انبار">
         </div>
         <div class="mb-3">
             <label for="place" class="form-label">مکان انبار</label>
             <input type="text" class="form-control" id="place" wire:model="place" placeholder="گلپایگان امام خمینی ...">
         </div>
         <div class="mb-3">
             <label for="capacity" class="form-label">ظرفیت انبار</label>
             <input type="text" class="form-control" id="capacity" wire:model="capacity" placeholder="0 یعنی بی نهایت">
         </div>
         <div class="mb-3">
             <label for="formGroupExampleInput2" class="form-label">نوع انبار</label>
             <select class="form-control">
                 <option value="استاندارد">استاندارد</option>
             </select>
         </div>

         <div class="mb-3">
             @if($edit_status)
                 <button class="btn btn-primary" wire:click.prevent="editW()">ویرایش کن</button>
             @else
                 <button class="btn btn-primary" wire:click.prevent="addW()">اضافه کن</button>
             @endif
         </div>
     </div>
</div>
