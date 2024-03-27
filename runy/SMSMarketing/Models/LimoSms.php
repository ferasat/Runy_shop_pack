<?php

namespace Sms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use MsgBox\Models\MsgBox;
use SiteLogs\Models\SiteLogs;
use Sms\Models\SmsMarketing;

class LimoSms extends Model
{
    use HasFactory;
    public static $apikey , $sender_number_service_1 , $sender_number_ads_1  ;

    public function __construct()
    {
        $limoSms = SmsMarketing::query()->where('name_panel' , 'لیمو اس ام اس')->first();
        //dd($limoSms);
        self::$apikey = 'd0fd0636-0a95-43a3-86c4-97847ec586e4' ;
        self::$sender_number_service_1 = $limoSms->sender_number_ads_1 ;
        self::$sender_number_ads_1 = $limoSms->sender_number_ads_1 ;
    }

    public static function get_apikey()
    {
        $limoSms = SmsMarketing::query()->where('name_panel' , 'لیمو اس ام اس')->first();
        return $limoSms->token ;
    }

    public static function sendSms($numbers, $message, $SenderNumber)
    {
        $url = 'https://api.limosms.com/api/sendsms';
        $receiver = array($numbers);
        $post_data = json_encode(array(
            'Message' => $message,
            'SenderNumber' => $SenderNumber,
            'MobileNumber' => $receiver,
        ));
        $process = curl_init();
        curl_setopt($process, CURLOPT_URL, $url);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POST, 1);
        curl_setopt($process, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($process, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($process, CURLOPT_HTTPHEADER,
            array('Content-Type: application/json', 'ApiKey:' . self::$apikey));
        $return = curl_exec($process);
        $httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
        curl_close($process);
        $decoded = json_decode($return);
        dd($decoded);
    }

    public static function sendPeerToPeerSms()
    {
        $url = 'https://api.limosms.com/api/sendpeertopeersms';
        $receiver = array("گیرنده دوم ", "گیرنده اول");
        $post_data = json_encode(array(
            'Message' => array("پیام دوم", "پیام اول"),
            'SenderNumber' => 'فرستنده',
            'SendToBlocksNumber' => 'false',
            'MobileNumber' => $receiver,
        ));
        $process = curl_init();
        curl_setopt($process, CURLOPT_URL, $url);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POST, 1);
        curl_setopt($process, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($process, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/json'
        , 'ApiKey:'. self::$apikey ));
        $return = curl_exec($process);
        $httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
        curl_close($process);
        $decoded = json_decode($return);
        print_r($decoded);
    }

    public static function sendPatternMessage($otp_id , $msg , $mobile)
    {
        $url = 'https://api.limosms.com/api/sendpatternmessage';
        $post_data = json_encode(array(
            'OtpId' => $otp_id,
            'ReplaceToken' => $msg,
            'MobileNumber' => $mobile
        ));
        $process = curl_init();
        curl_setopt($process, CURLOPT_URL, $url);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POST, 1);
        curl_setopt($process, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($process, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/json'
        , 'ApiKey:'. self::$apikey ));
        $return = curl_exec($process);
        $httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
        curl_close($process);
        $decoded = json_decode($return);
        dd($decoded);
    }

    public static function sendCode($mobile , $footer='خوش امدید')
    {
        $url = 'https://api.limosms.com/api/sendcode';
        $post_data = json_encode(array(
            'Mobile' => $mobile,
            'Footer' => $footer
        ));
        $process = curl_init();
        curl_setopt($process, CURLOPT_URL, $url);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POST, 1);
        curl_setopt($process, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($process, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/json'
        , 'ApiKey:'. self::get_apikey() ));
        $return = curl_exec($process);
        $httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
        curl_close($process);
        $decoded = json_decode($return);
        //dd($decoded , self::get_apikey());
        SiteLogs::new_Log('ارسال پیامک تایید هویت' , $return , 'User' , Auth::id() , 'Active' , 'text' , Auth::id() );
        return $decoded ;

    }

    public static function checkCode($mobile , $code)
    {
        $url = 'https://api.limosms.com/api/checkcode';
        $post_data = json_encode(array(
            'Mobile' => $mobile,
            'Code' => $code
        ));
        $process = curl_init();
        curl_setopt($process, CURLOPT_URL, $url);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POST, 1);
        curl_setopt($process, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($process, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/json'
        , 'ApiKey:'. 'd0fd0636-0a95-43a3-86c4-97847ec586e4' ));
        $return = curl_exec($process);
        $httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
        curl_close($process);
        $decoded = json_decode($return);
        SiteLogs::new_Log('بررسی پیامک تایید هویت' , $return , 'User' , Auth::id() , 'Active' , 'text' , Auth::id() );
        MsgBox::create('بررسی پیامک تایید هویت' , 'sms' , $decoded->success , $decoded->message , Auth::id()
            , fullName(Auth::id()) , Auth::id() , 'Auth' , null , Auth::user()->cellPhone );
        return $decoded;
    }

    public static function getReceivedMessage($number , $page=1 , $size=10 )
    {
        $url = 'https://api.limosms.com/api/getreceivedmessage';
        $post_data = json_encode(array(
            'Number' => $number ,
            'Page' => $page,
            'Size' => $size,
        ));
        $process = curl_init();
        curl_setopt($process, CURLOPT_URL, $url);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_POST, 1);
        curl_setopt($process, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($process, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/json'
        , 'ApiKey:'. self::$apikey ));
        $return = curl_exec($process);
        $httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
        curl_close($process);
        $decoded = json_decode($return);
        //dd($decoded);
        return $decoded ;
    }

    public static function getStatus($msg_id){
        $url ='https://api.limosms.com/api/getstatus';
        $post_data = json_encode(array(
            'MessageId' => [$msg_id]
        ));
        $process = curl_init();
        curl_setopt( $process,CURLOPT_URL,$url);
        curl_setopt( $process, CURLOPT_TIMEOUT,30);
        curl_setopt( $process, CURLOPT_POST, 1);
        curl_setopt($process, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt( $process, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt( $process, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt( $process, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt( $process, CURLOPT_HTTPHEADER, array('Content-Type: application/json'
        ,'ApiKey:'. self::$apikey ));
        $return = curl_exec( $process);
        $httpcode = curl_getinfo( $process, CURLINFO_HTTP_CODE);
        curl_close($process);
        $decoded = json_decode($return);
        dd($decoded);
    }

}
