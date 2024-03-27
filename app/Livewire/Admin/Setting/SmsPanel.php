<?php

namespace App\Livewire\Admin\Setting;

use Livewire\Component;
use Sms\Models\SmsMarketing;
use Livewire\Attributes\On;

class SmsPanel extends Component
{
    public $panel, $name_panel, $api_url, $token, $username, $password, $sender_number_ads_1, $sender_number_ads_2
    , $sender_number_ads_3, $sender_number_ads_4, $sender_number_service_1, $sender_number_service_2, $sender_number_service_3
    , $sender_number_service_4;

    public $btnDefaultTrue = false;

    public function mount()
    {
        $this->btnDefaultTrue = $this->panel->pin;
        $this->name_panel = $this->panel->name_panel;
        $this->api_url = $this->panel->api_url;
        $this->token = $this->panel->token;
        $this->username = $this->panel->username;
        $this->password = $this->panel->password;
        $this->sender_number_ads_1 = $this->panel->sender_number_ads_1;
        $this->sender_number_ads_2 = $this->panel->sender_number_ads_2;
        $this->sender_number_ads_3 = $this->panel->sender_number_ads_3;
        $this->sender_number_ads_4 = $this->panel->sender_number_ads_4;
        $this->sender_number_service_1 = $this->panel->sender_number_service_1;
        $this->sender_number_service_2 = $this->panel->sender_number_service_2;
        $this->sender_number_service_3 = $this->panel->sender_number_service_3;
        $this->sender_number_service_4 = $this->panel->sender_number_service_4;
    }

    public function render()
    {
        return view('livewire.admin.setting.sms-panel');
    }

    public function save()
    {
        $this->panel->name_panel = $this->name_panel ;
        $this->panel->api_url = $this->api_url  ;
        $this->panel->token = $this->token  ;
        $this->panel->username = $this->username  ;
        $this->panel->password = $this->password  ;
        $this->panel->sender_number_ads_1 = $this->sender_number_ads_1  ;
        $this->panel->sender_number_ads_2 = $this->sender_number_ads_2  ;
        $this->panel->sender_number_ads_3 = $this->sender_number_ads_3  ;
        $this->panel->sender_number_ads_4 = $this->sender_number_ads_4  ;
        $this->panel->sender_number_service_1 = $this->sender_number_service_1  ;
        $this->panel->sender_number_service_2 = $this->sender_number_service_2  ;
        $this->panel->sender_number_service_3 = $this->sender_number_service_3  ;
        $this->panel->sender_number_service_4 = $this->sender_number_service_4  ;
        $this->panel->save() ;
    }

    public function changePin($pin)
    {
        $allPanel = SmsMarketing::all();

        foreach ($allPanel as $item){
            $item->pin = 0 ;
            $item->save();
        }

        $this->panel->pin = !$pin ;
        $this->save() ;

        if ($this->panel->pin == true){
            $this->btnDefaultTrue= true ;
        }else{
            $this->btnDefaultTrue= false ;
        }

        $this->dispatch('reload_sms_panel');
        $this->render();
    }

    #[on('reload_sms_panel')]
    public function reload_sms_panel()
    {
        //dd(44);
        $this->panel = SmsMarketing::query()->find($this->panel->id);
        if ($this->panel->pin == true){
            $this->btnDefaultTrue= true ;
        }else{
            $this->btnDefaultTrue= false ;
        }
        $this->render();
    }
}
