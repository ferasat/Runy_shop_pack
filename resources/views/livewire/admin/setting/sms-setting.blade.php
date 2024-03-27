<div class="profile-setting col-xl-9 col-lg-8 col-md-12 order-2">
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSmsPanel" wire:click.prevent="addSmsPanel()">اضافه کردن پنل</button>
        <!-- Modal -->
        <div class="modal fade" id="addSmsPanel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addSmsPanelLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addSmsPanelLabel">تعریف پنل پیامکی جدید</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($panels as $panel)
            @livewire('admin.setting.sms-panel' , ['panel'=>$panel] , key($panel->id))
    @endforeach
</div>
