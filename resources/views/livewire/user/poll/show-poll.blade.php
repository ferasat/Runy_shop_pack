<div class="container">
    <div class="row py-5 my-5">
        <div class="col-md-6 mx-auto my-4">
            @if($show_success)
                <label class="alert alert-success text-center">نظر شما با موفقیت ثبت شد</label>
            @else
                @foreach ($questions as $i=>$question)
                    @livewire('user.poll.row-question' , ['question'=>$question,'poll'=>$poll,'currentStep'=>$currentStep,'maxStep'=>$maxStep,'allResult'=>$allResult]
                    ,key($question['id'].rand(1,99)) )
                @endforeach
                {{--            @if($currentStep==$maxStep+1)--}}
                <button class="btn btn-success" wire:click="send">اتمام نظرسنجی</button>
                {{--            @endif--}}
            @endif
        </div>
    </div>
</div>
