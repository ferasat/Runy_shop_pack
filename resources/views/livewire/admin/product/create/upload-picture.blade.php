<div>
    @if($picture !== null )
        @if(isset($picture->temporaryUrl ))
            <img src="{{$picture->temporaryUrl()}}" class="card-img-top sh-19">
        @else
            <img src="{{asset($picture)}}" class="card-img-top sh-19">
        @endif
    @endif
    <label class="form-label">تصویر شاخص</label>
    <input type="file" class="form-control" wire:model.live="picture" name="picture">
    @error('picture') <span class="text-danger">{{ $message }}</span>@enderror

</div>
