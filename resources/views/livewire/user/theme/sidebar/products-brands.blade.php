<div class="card mb-4">
    <div class="card-header d-flex justify-content-between">
        <div class="">برند</div>
    <button class="btn btn-outline-primary" wire:click="action()">اعمال</button>
    </div>
    <div class="card-body">
        @foreach($brands as $brand)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="brand.{{$brand->id}}" wire:model.live="selectBrands.{{$brand->id}}" id="brand.{{$brand->id}}">
            <label class="form-check-label" for="brand.{{$brand->id}}">
                {{ $brand->name }}
            </label>
        </div>
        @endforeach
    </div>
</div>
