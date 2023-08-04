<?php

namespace App\Jobs;

use Ghasedak\GhasedakApi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendSmsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */


    public function __construct(private $phone, private $text_sms)
    {
    }

    public function handle()
    {
        $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
        $api->SendSimple(
            $this->phone,       // receptor
            $this->text_sms,    // message
            "300002525"         // choose a line number from your account
        );
    }

}
