<?php

return [

    /**
     *  driver class namespace.
     */
    'driver' => Omalizadeh\MultiPayment\Drivers\Zibal\Zibal::class,

    /**
     *  gateway configurations.
     */
    'main' => [
        'merchant' => 'zibal', // use 'zibal' to enable sandbox (testing) mode
        'callback_url' => 'http://127.0.0.1:8080/payed_invoice_callback_url',
        'description' => 'payment using zarinpal',
    ],
    'other' => [
        'merchant' => '',
        'callback_url' => 'https://yoursite.com/path/to',
        'description' => 'payment using zarinpal',
    ],
];
