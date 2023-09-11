<div class="col-9">
    <div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="user_id" class="form-label">کاربر</label>
                    <select id="user_id" class="form-select" wire:model.lazy="for_user_id" name="for_user_id">
                        <option value="null" selected>عمومی</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}" >{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-4">
                    <label for="code" class="form-label">کد تخفیف</label>
                    <input type="text" class="form-control" wire:model.lazy="code">
                </div>
                <div class="col-md-4">
                    <label for="amount" class="form-label">مقدار تخفیف</label>
                    <input type="number" class="form-control" wire:model.lazy="amount">
                </div>
                <div class="col-md-4">
                    <label for="type" class="form-label">نوع تخفیف</label>
                    <select id="type" class="form-select" wire:model.lazy="type" name="type">
                        <option value="fixed">درصدی</option>
                        <option value="percentage">ثابت</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="duration" class="form-label">نوع یازه</label>
                    <select id="duration" class="form-select" wire:model.lazy="duration" name="duration">
                        <option value="date">تاریخ</option>
                        <option value="time">زمان</option>

                    </select>
                </div>
                @if($showDate)
                <div class="col-md-4">
                    <label for="start_date" class="form-label">شروع تاریخ</label>
                    <input type="date" class="form-control" wire:model.lazy="start_date">
                </div>
                <div class="col-md-4">
                    <label for="end_date" class="form-label">پایان تاریخ</label>
                    <input type="date" class="form-control" wire:model.lazy="end_date">
                </div>
                @elseif($showTime)
                    <div class="col-md-4">
                        <label for="start_time" class="form-label">شروع زمان</label>
                        <input type="time" class="form-control" wire:model.lazy="start_time">
                    </div>
                    <div class="col-md-4">
                        <label for="end_time" class="form-label">پایان زمان</label>
                        <input type="time" class="form-control" wire:model.lazy="end_time">
                    </div>
                @endif


            </div>
            <div class="col-md-4">
                <label for="capacity" class="form-label">ظرفیت</label>
                <input type="number" class="form-control" wire:model.lazy="capacity">
            </div>
        </div>


    </div>

    <div class="card-footer">
        <button class="btn btn-primary mb-1 active-scale-up" wire:click.prevent="save">ذخیره</button>
    </div>
</div>


</div>
