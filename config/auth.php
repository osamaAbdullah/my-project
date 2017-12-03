<?php

return [

    'defaults' => [
        'guard' => 'passenger',
        'passwords' => 'passengers',
    ],

    'guards' => [
        'passenger' => [
            'driver' => 'session',
            'provider' => 'passengers',
        ],

        'passenger-api' => [
            'driver' => 'token',
            'provider' => 'passengers',
        ],
        'driver' => [
            'driver' => 'session',
            'provider' => 'drivers',
        ],

        'driver-api' => [
            'driver' => 'token',
            'provider' => 'drivers',
        ],

    ],

    'providers' => [
        'passengers' => [
            'driver' => 'eloquent',
            'model' => App\Passenger::class,
        ],
        'drivers' => [
            'driver' => 'eloquent',
            'model' => App\Driver::class,
        ],

    ],

    'passwords' => [
        'passengers' => [
            'provider' => 'passengers',
            'table' => 'password_resets',
            'expire' => 20,
        ],
        'drivers' => [
            'provider' => 'drivers',
            'table' => 'password_resets',
            'expire' => 20,
        ],
    ],

];
