<?php

return [
    'services' => [
        'demo' => [
            'name' => 'Demo',
            'class' => 'Viewflex\Zoap\Demo\DemoService',
            'exceptions' => [
                'Exception',
            ],
            'types' => [
                'keyValue' => 'Viewflex\Zoap\Demo\Types\KeyValue',
                'product' => 'Viewflex\Zoap\Demo\Types\Product',
            ],
            'strategy' => 'ArrayOfTypeComplex',
            'headers' => [
                'Cache-Control' => 'no-cache, no-store'
            ],
            'options' => []
        ],
        'bbdair' => [
            'name' => 'BbdAir',
            'class' => '\App\Services\Soap\BbdAir\BbdAirService',
            'exceptions' => [
                'Exception',
            ],
            'types' => [
                'baseType' => '\App\Services\Soap\BbdAir\Types\User',
            ],
            'strategy' => 'ArrayOfTypeComplex',
            'headers' => [
                'Cache-Control' => 'no-cache, no-store'
            ],
            'options' => []
        ],
    ],

    'logging' => true,

    'mock' => [
        'user' => 'test@test.com',
        'password' => 'tester',
        'token' => 'tGSGYv8al1Ce6Rui8oa4Kjo8ADhYvR9x8KFZOeEGWgU1iscF7N2tUnI3t9bX'
    ],
];
