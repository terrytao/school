<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [

 /*       'session' => [
            'timeout' => 300,
        ],*/

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => 'nickcv\mandrill\Mailer',
            'apikey' => 'UKKIeFmQVJmbKrha4S1dTw',
        ],

        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'thousandSeparator' => '',
            'decimalSeparator' => '.',
        ]
    ]
];
