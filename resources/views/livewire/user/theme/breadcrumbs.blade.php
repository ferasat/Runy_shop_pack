<div class="row">
    <div class="col-12 mt-5">
        <ul class="breadcrumb">
            @foreach($breadcrumbs as $index=>$breadcrumb)
                <li class="breadcrumb__item @if($x == 1) breadcrumb__item-firstChild @elseif($x == $y) breadcrumb__item-lastChild @endif">
                    <a href="{{ asset($index) }}">
                            <span class="breadcrumb__inner">
                            <span class="breadcrumb__title">{{ $breadcrumb }}</span>
                            </span>
                    </a>
                </li>
                @php $x++; @endphp
            @endforeach
        </ul>
    </div>
</div>
