<div class="row">
    <div class="col-12 mt-5">
        <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            @foreach($breadcrumbs as $index=>$breadcrumb)
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" itemprop="position" content="{{ $x }}" class="breadcrumb__item @if($x == 1) breadcrumb__item-firstChild @elseif($x == $y) breadcrumb__item-lastChild @endif">
                    <a href="{{ asset($index) }}" itemtype="https://schema.org/WebPage" itemprop="item" itemid="{{ asset($index) }}">
                            <span class="breadcrumb__inner">
                            <span class="breadcrumb__title" itemprop="name">{{ $breadcrumb }}</span>
                            </span>
                    </a>
                </li>
                @php $x++; @endphp
            @endforeach
        </ul>
    </div>
</div>
