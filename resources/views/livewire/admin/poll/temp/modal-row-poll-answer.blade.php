<div class="row">
    <div class="col-md-2">
        <span>{{$poll_answer_field_template->answer_title}}</span>
    </div>
    <div class="col-md-8">
        <div class="progress my-2">
            <div class="progress-bar" role="progressbar" style="width: {{$count}}%" aria-valuenow="{{$count}}" aria-valuemin="0" aria-valuemax="100">{{$count}}%</div>
        </div>
    </div>
</div>
