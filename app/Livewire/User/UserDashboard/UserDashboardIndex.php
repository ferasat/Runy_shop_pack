<?php

namespace App\Livewire\User\UserDashboard;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use MsgBox\Models\MsgBox;
use Sms\Models\LimoSms;

class UserDashboardIndex extends Component
{
    public $dashboard_status, $activeCode, $message;

    protected $user;

    public function mount()
    {
        $this->message = '';
        $this->dashboard_status = 'dashboard';
        $this->user = Auth::user();
        if ($this->user->status == 'disabled') {
            $lastNotify = MsgBox::query()
                ->where('created_at', '<', Carbon::now()->subMinute(2))->get();
            $lastNotify = $lastNotify->where([
                'for_item' => 'Auth',
                'type' => 'sms'
            ]);
            //dd($lastNotify);
            if (count($lastNotify) == 0) {
                $result = LimoSms::sendCode($this->user->cellPhone, setting_site()->site_name);
                $this->message = $result->message;
                ///$newSmsAuth = new MsgBox();
            } else {
                $this->message = 'کد تایید برای شما ارسال شده است';
            }
        }

    }

    public function render()
    {
        return view('livewire.user.user-dashboard.user-dashboard-index', [
            'user' => $this->user,
        ]);
    }

    public function dashboardStatus($status)
    {
        $this->dashboard_status = $status;
        $this->render();
    }

    public function active()
    {
//dd(Auth::user()->cellPhone , $this->activeCode);
        $resault = LimoSms::checkCode(Auth::user()->cellPhone, $this->activeCode);
        if ($resault->success == true) {
            Auth::user()->status = 'active';
            Auth::user()->save();
            $this->message = 'حساب کاربری شما فعال شد';
        } else {
            $this->message = $resault->message;
        }
        //dd($resault);
    }

}
