<?php

namespace App\Livewire\Admin\SendMessages\Create;

use App\Models\SendMessages;
use Customer\Models\Customer;
use Ghasedak\GhasedakApi;
use Livewire\Component;
use Product\Models\Product;

class CreateSendMessages extends Component
{
    public $products,$customers;
    public $subject,$type_action,$type_item,$product_id,$text_sms,$customer_id;
    public function mount()
    {
        $this->products=Product::all();
        $this->customers=Customer::all();
        $this->type_action='once';
        $this->type_item='product';
        $this->product_id=$this->products[0]->id;
    }
    public function render()
    {
        return view('livewire.admin.send-messages.create.create-send-messages');
    }
    public function save()
    {


        $new_msg = new SendMessages();
        $new_msg->subject = $this->subject;
        $new_msg->type_action = $this->type_action;
        $new_msg->type_item = $this->type_item;
        $new_msg->type_id = $this->product_id;
        $new_msg->text_sms = $this->text_sms;
        $new_msg->customer_id = $this->customer_id;
        $new_msg->save();
        $customer = Customer::query()->find($this->customer_id);
        $phone = $customer->phone;

     /*   $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
        $api->SendSimple(
            $phone,          // receptor
            $this->text_sms,  // message
            "300002525"      // choose a line number from your account
        );*/

        return $this->redirect(route('send.messages.index'));

    }
}
