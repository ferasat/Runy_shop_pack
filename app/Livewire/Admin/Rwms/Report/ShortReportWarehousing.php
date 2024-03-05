<?php

namespace App\Livewire\Admin\Rwms\Report;

use Livewire\Component;
use RunyWarehousing\Models\RunyWMS;

class ShortReportWarehousing extends Component
{
    public function render()
    {
        $wms = RunyWMS::query()->orderByDesc('id')->get();
        $count_wms = count($wms);
        return view('livewire.admin.rwms.report.short-report-warehousing' , [
            'wms' => $wms,
            'count_wms' => $count_wms
        ]);
    }
}
