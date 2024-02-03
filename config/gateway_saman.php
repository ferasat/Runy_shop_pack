<?php

return [

    /**
     *  driver class namespace.
     */
    'driver' => Omalizadeh\MultiPayment\Drivers\Saman\Saman::class,

    /**
     *  soap client options.
     */
    'soap_options' => [
        'encoding' => 'UTF-8',
    ],

    /**
     *  gateway configurations
     *  merchant_id is the same as terminal_id.
     */
    'main' => [
        'terminal_id' => '',
        'callback_url' => 'http://127.0.0.1:8080/payed_invoice_callback_url',
        'callback_method' => 'POST', // supported values: POST, GET
        'description' => 'payment using saman',
    ],
    'other' => [
        'terminal_id' => '',
        'callback_url' => 'http://127.0.0.1:8080/payed_invoice_callback_url',
        'callback_method' => 'POST',
        'description' => 'payment using saman',
    ],
];
