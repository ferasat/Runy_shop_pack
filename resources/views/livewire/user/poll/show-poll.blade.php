<div class="container">
    <div class="row py-5 my-5">
        <div class="col-md-6 mx-auto my-5">
            @if($show_success)

                <div class="card">
                    <div class="card-header">نظر شما با موفقیت ثبت شد</div>
                    <div class="card-body ">
                        <a href="{{ asset('/') }}" class="btn btn-runy-outline-primary m-3">رفتن به صفحه اصلی</a>
                        <a href="{{ asset('/shop') }}" class="btn btn-runy-success m-3">رفتن به فروشگاه</a>
                    </div>
                </div>
            @else
                @foreach ($questions as $i=>$question)
                    @livewire('user.poll.row-question' , ['question'=>$question,'poll'=>$poll,'currentStep'=>$currentStep,'maxStep'=>$maxStep,'allResult'=>$allResult]
                    ,key($question['id'].rand(1,99)) )
                @endforeach
                @if($showEndBtn)
                    <div class="card">
                        <div class="card-header">آیا از ارسال اطلاعات مطمئن هستید ؟</div>
                        <div class="card-body d-flex justify-content-between">

                            <button class="btn btn-runy-success" wire:click="send">بله ثبت شود</button>
                            <button class="btn btn-secondary" onclick="window.location.reload()">خیر می خوام ویرایش کنم</button>
                        </div>
                        <div class="card-footer">از اینکه وقت گذاشتید متشکریم </div>

                    </div>
                @endif
            @endif
        </div>
    </div>
</div>
