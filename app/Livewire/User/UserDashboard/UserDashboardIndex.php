<?php

namespace App\Livewire\User\UserDashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboardIndex extends Component
{
    public $dashboard_status ;

    protected $user;

    public function mount()
    {
        $this->dashboard_status = 'dashboard' ;
    }
    public function render()
    {
        return view('livewire.user.user-dashboard.user-dashboard-index' , [
            'user' => Auth::user() ,
        ]);
    }

    public function dashboardStatus($status)
    {
        $this->dashboard_status = $status ;
        $this->render();
    }

}
