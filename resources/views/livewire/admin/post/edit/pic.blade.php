<div class="card mt-2">
    <div class="card-body">
        <div class="mb-3">
            @if($startUp == false )
                @if($pic == null or $pic == '')
                    <img src="{{asset($pic)}}" class="card-img-top sh-19 TestPic" alt="post">
                @else
                    <img src="{{asset($pic)}}" class="card-img-top sh-19 Test22" alt="post">
                @endif

            @elseif($startUp == true)
                <img src="{{$pic->temporaryUrl()}}" class="card-img-top sh-19" alt="post">
            @endif
            <label class="form-label">تصویر شاخص</label>
            <input type="file" class="form-control" wire:model.live="pic" name="pic">
            @error('pic') <span class="text-danger">{{ $message }}</span>@enderror
            <button wire:click.privent="uploadPhoto" class="btn btn-secondary">بارگزاری</button>
            <div class="d-block text-success" wire:loading wire:target="pic">در حال بارگزاری...</div>
        </div>
    </div>
</div>
