<div class="mt-2 mb-4 text-justify ql-align-justify">
    {!! $product -> shortDescription !!}
    @if($is_feature)
        @foreach($features as $feature)
            <ul class="d-block list-group">
                <li class="list-group-item">{{ $feature->name }} : <strong>{{ $feature->value }}</strong> </li>
            </ul>
        @endforeach
    @endif
</div>
