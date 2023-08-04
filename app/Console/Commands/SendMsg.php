<?php

namespace App\Console\Commands;

use App\Models\SendMessages;
use Customer\Models\Customer;
use Ghasedak\GhasedakApi;
use Illuminate\Console\Command;

class SendMsg extends Command
{
    protected $signature = 'sms:send';

    protected $description = 'Send hourly SMS to customers';

    public function handle()
    {
        $pendingMessages = SendMessages::where('sent', false)->get();


        foreach ($pendingMessages as $message) {

            $customer=Customer::query()->find($message->customer_id);
            $phone=$customer->phone;
            $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
            $api->SendSimple(
                $phone,          // receptor
                $message->text_sms,  // message
                "300002525"      // choose a line number from your account
            );

            // Mark the message as sent
            $message->update(['sent' => true]);
        }

        $this->info('minute SMS sent successfully.');
    }
}
