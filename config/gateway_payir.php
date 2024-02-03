<?php

return [

    /**
     *  driver class namespace.
     */
    'driver' => Omalizadeh\MultiPayment\Drivers\PayIr\PayIr::class,

    /**
     *  gateway configurations.
     */
    'main' => [
        'api_key' => 'test', // use 'test' to enable sandbox mode
        'callback_url' => 'http://127.0.0.1:8080/payed_invoice_callback_url',
        'description' => 'payment using payir',
    ],
    'other' => [
        'api_key' => '',
        'callback_url' => 'https://yoursite.com/path/to',
        'description' => 'payment using payir',
    ],
];
