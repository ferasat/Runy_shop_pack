<div class="card mb-3">
    @if($status == 'edit')
        @livewire('admin.post.category.edit-cat' , ['cat'=>$cat])
    @else
        <div class="card-header d-flex justify-content-between">
            <span>{{ $cat->name }}</span>
            <button class="btn btn-outline-warning" wire:click="cheng_status()">ویرایش</button>
        </div>

        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="d-inline-block">
                    <a target="_blank" href="{{ asset('/post-category/'.$cat->slug) }}">{{ $cat->name }}</a>
                </div>
                <div class="d-inline-block">
                    <button class="btn btn-danger" wire:click.privent="deleteCat()"
                            @if($disableBtn) disabled @endif>
                        حذف
                    </button>
                </div>
            </div>
        </div>
    @endif

</div>
