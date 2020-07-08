<?php 

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        //手动配置
        'cache' => [
            'class' => 'yii\caching\MemCache',
            'useMemcached'=>true,
            'servers'=>[
                [
                    'host'=>'',
                    'port'=>11211,
                    'weight'=>100
                ],
            ],
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '',
            'port' => 6379,
            'database' => 0,
            // 'password'  => '',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=;dbname=',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
        ],
    ]
];