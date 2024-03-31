<div>
    @if($invoice -> reservation_id ?? false)
        <a href="{{ asset('/dashboard/reservation/show/'.$invoice -> reservation_id) }}">
            {{ $invoice -> owner ?? 'None'}}:<br>
            {{ $invoice -> subject ?? 'None' }}<br>
            <span>مسئول: </span>{{ liable_reserve($invoice -> reservation_id) ?? 'None' }}
        </a>
    @else none
    @endif
</div>
