<div class="container">
    <div class="row py-5">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">پیشخوان</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="" wire:click.prevent="dashboardStatus('dashboard')">پیشخوان</a></li>
                        <li class="list-group-item"><a href="#" wire:click.prevent="dashboardStatus('carts')">سفارشات</a></li>
                        <li class="list-group-item"><a href="#" wire:click.prevent="dashboardStatus('logs')">فعالیت ها</a></li>
                        <li class="list-group-item"><a href="#" wire:click.prevent="dashboardStatus('rates')">امتیازات</a></li>
                        <li class="list-group-item"><a href="#" wire:click.prevent="dashboardStatus('profile')">تغییر مشخصات</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            @if(Auth::user()->status == 'disabled')
                <div class="card">
                    <div class="card-header">
                        فعال سازی حساب
                    </div>
                    <div class="card-body row">
                        <div class="col-md-4">
                            <label class="visually-hidden" for="activeCode">کدفعال سازی</label>
                            <div class="input-group">
                                <div class="input-group-text">کدفعال سازی</div>
                                <input type="text" class="form-control" wire:model.live="activeCode" id="activeCode" placeholder="کد را وارد کنید">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button wire:click.prevent="active()" class="btn btn-primary">فعال کن</button>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="badge bg-info rounded">{{ $message }}</div>
                    </div>
                </div>
            @else
                @if($dashboard_status == 'dashboard')
                    <div class="card">
                        <div class="card-header">{{ fullName(Auth::id()) }} خوش آمدید !</div>
                        <div class="card-body">

                        </div>
                    </div>
                @elseif($dashboard_status == 'carts')
                    @livewire('user.user-dashboard.user-dashboard-my-carts' , compact('user'))
                @elseif($dashboard_status == 'logs')
                    @livewire('user.user-dashboard.user-dashboard-my-logs' , compact('user'))
                @elseif($dashboard_status == 'rates')
                    @livewire('user.user-dashboard.user-dashboard-my-rates' , compact('user'))
                @elseif($dashboard_status == 'profile')
                    @livewire('user.user-dashboard.user-dashboard-my-profile' , compact('user'))
                @endif
            @endif
        </div>
    </div>
</div>
