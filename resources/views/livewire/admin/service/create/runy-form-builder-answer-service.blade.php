<div class="row">
    <div class="col-6">
        <label class="label">عنوان جواب</label>
        <input wire:model="answer_title" class="form-control">
    </div>
    <div class="col-4">
        @if($showSave)
            <label class="label text-white d-block">.</label>
            <button  class="btn btn-info">ذخیره شده</button>
        @else
            <label class="label text-white d-block">.</label>
            <button wire:click.prevent="save()" class="btn btn-outline-primary">ذخیره</button>
        @endif

    </div>
</div>
