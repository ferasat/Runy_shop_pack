<div class="card mb-3 border-color-runy-primary">
    <div class="card-header border-color-runy-primary">
        <svg class="icon-svg-panel" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#6c429a">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    d="M2 3h7v1H2zm7 4H6v1h3zm0 4H3v1h6zm12-8H11v1h10zM11 7v1h5V7zm0 5h8v-1h-8zM1 19h22v3H1zm1 2h20v-1H2zm7-5v-1H5v1zm2 0h10v-1H11z"></path>
                <path fill="none" d="M0 0h24v24H0z"></path>
            </g>
        </svg>
        ویژگی های محصول
    </div>
    <div class="card-body">
        @livewire('admin.product.create.feature.add-feature' , compact('product'))
        @foreach($featuresItem as $item)
            @livewire('admin.product.create.feature.feature-item' , [ 'feature'=>$item ] , key($item->id.rand(9,100)))
        @endforeach
    </div>
    <div class="card-footer border-color-runy-primary">
        @if($saveStatus)
            <button class="btn btn-info" wire:click="">
                <svg class="icon-svg-panel-sm svg-loader" fill="#6c429a" viewBox="0 0 32 32"
                     xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M18.91.28a1,1,0,0,0-.82.21,1,1,0,0,0-.36.77V5.45a1,1,0,0,0,.75,1,9.91,9.91,0,1,1-5,0,1,1,0,0,0,.75-1V1.26a1,1,0,0,0-.36-.77,1,1,0,0,0-.82-.21,16,16,0,1,0,5.82,0ZM16,30A14,14,0,0,1,12.27,2.51V4.7a11.91,11.91,0,1,0,7.46,0V2.51A14,14,0,0,1,16,30Z"></path>
                    </g>
                </svg>
                در حال ذخیره سازی
            </button>
        @else
            <button class="btn btn-runy-primary" wire:click="save()"> سئو را ذخیره کن</button>
        @endif

    </div>
</div>
