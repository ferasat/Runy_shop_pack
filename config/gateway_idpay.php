<?php

return [
    'driver' => Omalizadeh\MultiPayment\Drivers\IDPay\IDPay::class,

    'main' => [
        'api_key' => '6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
        'sandbox' => true, // sandbox (testing) mode activation
        'callback_url' => 'http://127.0.0.1:8080/payed_invoice_callback_url',
        'description' => 'payment using idpay',
    ],
    'other' => [
        'api_key' => '',
        'sandbox' => true,
        'callback_url' => 'https://yoursite.com/path/to',
        'description' => 'payment using idpay',
    ],
];
