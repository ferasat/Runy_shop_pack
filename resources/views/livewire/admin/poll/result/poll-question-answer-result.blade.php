<li class="list-group-item">
    <div class="row">
        <div class="col-4">
            <label>{{$y}}:</label>
            <span>{{$answer->name}}</span>
        </div>
        <div class="col-8">
            <div class="progress h-100" style="direction: ltr">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{$count}}% " aria-valuenow="{{$count}}" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-label">{{$count}}%</div>
                </div>
            </div>
        </div>

    </div>
</li>
