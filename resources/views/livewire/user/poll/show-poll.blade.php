<div class="row">
    <div class="col-md-6 mx-auto my-4">
        @if($show_success)
            <span class="alert alert-success">نظر شما با موفقیت ثبت شد</span>
        @else
            @foreach ($questions as $i=>$question)
                @livewire('user.poll.row-question' , ['question'=>$question,'poll'=>$poll,'currentStep'=>$currentStep,'maxStep'=>$maxStep,'allResult'=>$allResult]
                ,key($question['id'].rand(1,99)) )
            @endforeach
            @if($currentStep==$maxStep+1)
                <button class="btn btn-success" wire:click="send">اتمام نظرسنجی</button>
            @endif
        @endif
    </div>
</div>
