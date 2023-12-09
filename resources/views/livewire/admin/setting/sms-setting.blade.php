<div class="profile-setting col-xl-9 col-lg-8 col-md-12 order-2">
    @foreach($panels as $panel)
        @if($panel->name_panel == 'قاصدک')
            @livewire('admin.setting.sms-panel' , ['panel'=>$panel] , key($panel->id))
        @elseif($panel->name_panel == 'لیمو اس ام اس')
            @livewire('admin.setting.sms-panel' , ['panel'=>$panel] , key($panel->id))
        @endif
    @endforeach


</div>
