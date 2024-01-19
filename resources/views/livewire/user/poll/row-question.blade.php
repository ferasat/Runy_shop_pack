<div class="card">
    <div class="card-header">
        <h4 class="mb-2">{{" سوال ".$currentStep}}</h4>
    </div>
    @if ($question->question_type == 'radio')
        @livewire('user.poll.question-type.radio-question' , ['question'=>$question,'currentStep'=>$currentStep,'maxStep'=>$maxStep,'allResult'=>$allResult] ,key($question['id'].rand(1,99)) )
    @endif
    @if ($question->question_type == 'checkbox')
        @livewire('user.poll.question-type.check-box-question' , ['question'=>$question,'currentStep'=>$currentStep,'maxStep'=>$maxStep,'allResult'=>$allResult] ,key($question['id'].rand(1,99)) )
    @endif
    @if ($question->question_type == 'select')
        @livewire('user.poll.question-type.select-question' , ['question'=>$question,'currentStep'=>$currentStep,'maxStep'=>$maxStep,'allResult'=>$allResult] ,key($question['id'].rand(1,99)) )
    @endif
    @if ($question->question_type == 'text')
        @livewire('user.poll.question-type.text-question' , ['question'=>$question,'currentStep'=>$currentStep,'maxStep'=>$maxStep,'allResult'=>$allResult] ,key($question['id'].rand(1,99)) )
    @endif

</div>
