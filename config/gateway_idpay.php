<?php

return [

    /**
     *  driver class namespace.
     */
    'driver' => Omalizadeh\MultiPayment\Drivers\IDPay\IDPay::class,

    /**
     *  gateway configurations.
     */
    'main' => [
        'api_key' => '6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
        'sandbox' => true, // sandbox (testing) mode activation
        'callback_url' => asset('/').'in_pay/result',
        'description' => 'payment using idpay',
    ],
    'other' => [
        'api_key' => '',
        'sandbox' => true,
        'callback_url' => 'https://yoursite.com/path/to',
        'description' => 'payment using idpay',
    ],
];
