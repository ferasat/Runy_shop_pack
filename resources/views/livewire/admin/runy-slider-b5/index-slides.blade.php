<div class="row justify-content-center">
    <div class="col-xl-8 mb-5">
        <section class="scroll-section" id="listPost">
            @foreach($slides as $slide)

                <div class="card mb-2 shadow border-color-runy-secend">
                    <div class="card-header bg-runy-secend">اسلایدها </div>
                    <div class="card-body">
                        @livewire('admin.runy-slider-b5.row-slide' , ['slide' => $slide]  , key($slide->id))
                    </div>
                </div>
            @endforeach

        </section>
    </div>

</div>
