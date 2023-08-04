<?php

namespace SendMessages\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use Customer\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Product\Models\Product;
use Illuminate\Http\Request;

class SendMessagesController extends Controller
{
    public function index(){
        $html_tag_data = ["override" => '{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'ارسال پیام';
        $description = 'مدیریت پیام';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/send_messages" => " ارسال پیام  "];


        return view('SendMessagesView::indexSendMessages', compact('html_tag_data', 'title', 'description', 'breadcrumbs'));
    }
    public function send_msg(Request $request)
    {
        $recipientEmail = 'farzaneh.lbf@gmail.com';
        Mail::to($recipientEmail)->send(new WelcomeMail());
        return "Email sent successfully!";
      //  dd($request->all());
    }
    public function create()
    {

        $title = 'ایجاد پیام';
        $description = 'ایجاد پیام';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/send-messages" => " پیام ها  "];

        return view('SendMessagesView::createSendMessages', compact('title', 'description',
            'breadcrumbs'));
    }

}
