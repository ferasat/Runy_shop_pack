<?php

return [

    'driver' => Omalizadeh\MultiPayment\Drivers\Zarinpal\Zarinpal::class,

    'main' => [
        'authorization_token' => '', // optional, used only to refund payments (can be created from zarinpal panel)
        'merchant_id' => '55e0738a-4bec-4946-aefe-01bd5bef37d4',
        'callback_url' => 'https://yoursite.com/path/to',
        'mode' => 'sandbox', // supported values: sandbox, normal, zaringate
        'description' => 'payment using zarinpal',
    ],
    'other' => [
        'authorization_token' => '',
        'merchant_id' => '',
        'callback_url' => 'https://yoursite.com/path/to',
        'mode' => 'normal',
        'description' => 'payment using zarinpal',
    ],
];
