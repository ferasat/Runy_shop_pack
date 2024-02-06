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

        </div>
    </div>
</div>
