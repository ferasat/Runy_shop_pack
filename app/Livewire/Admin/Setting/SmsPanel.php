<?php

namespace App\Livewire\Admin\Setting;

use Livewire\Component;

class SmsPanel extends Component
{
    public $panel, $name_panel, $api_url, $token, $username, $password, $sender_number_ads_1, $sender_number_ads_2
    , $sender_number_ads_3, $sender_number_ads_4, $sender_number_service_1, $sender_number_service_2, $sender_number_service_3
    , $sender_number_service_4;

    public function mount()
    {
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
}
