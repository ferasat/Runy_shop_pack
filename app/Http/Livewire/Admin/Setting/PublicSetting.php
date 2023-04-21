<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;

class PublicSetting extends Component
{
    public $site_name, $site_url, $site_short_description, $mobile_phone, $office_phone , $dash_url , $have_ssl , $disableBTN = false
    , $showMessage = false;

    public function mount()
    {
        $setting = Setting::query()->first();
        $this->site_name = $setting->site_name;
        $this->site_url = $setting->site_url;
        $this->have_ssl = $setting->have_ssl;
        $this->site_short_description = $setting->site_short_description;
        $this->mobile_phone = $setting->mobile_phone;
        $this->office_phone = $setting->office_phone;
        $this->dash_url = $setting->dash_url;
    }

    public function render()
    {
        return view('livewire.admin.setting.public-setting');
    }

    public function updated()
    {
        $this->showMessage = false ;
    }

    public function save()
    {
        $this->disableBTN = true ;
        $setting = Setting::query()->findOrFail('1');
        $setting->site_name = $this->site_name;
        $setting->site_url = $this->site_url;
        $setting->have_ssl = $this->have_ssl;
        $setting->site_short_description = $this->site_short_description;
        $setting->mobile_phone = $this->mobile_phone;
        $setting->office_phone = $this->office_phone;
        $setting->dash_url = $this->dash_url;

        if ($setting->save()){
            $this->showMessage = true ;
            $this->disableBTN = false ;
        }
    }
}
