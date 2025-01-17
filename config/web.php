<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'LcK3PjFjvLxbL850IA0bCqShQZpk49qh',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'switch-language' => 'site/switch-language',
                'quest-answer' => 'site/quest-answer',
                'quest-answer/<url:\w+>' => 'site/quest-answer',

                'trailer-dimensions' => 'site/trailer-dimensions',
                'trailer-dimensions/<url:\w+>' => 'site/trailer-dimensions',

                'truck-dimensions' => 'site/truck-dimensions',
                'truck-dimensions/<url:\w+>' => 'site/truck-dimensions',

                'container-dimensions' => 'site/container-dimensions',
                'container-dimensions/<url:\w+>' => 'site/container-dimensions',

                'pallet-dimensions' => 'site/pallet-dimensions',
                'pallet-dimensions/<url:\w+>' => 'site/pallet-dimensions',

                'aircraft-specification' => 'site/aircraft-specification',
                'aircraft-specification/<url:\w+>' => 'site/aircraft-specification',

                '<action:\w+>' => 'site/<action>',
                '<action:\w+>/<language:\w+>' => 'site/<action>',
                // '<action:\w+>/<language:\w+>/<news:\w+>' => 'site/<action>',
                'news/<url:\w+>/<news:\w+>' => 'site/news',
                'tracking/<url:\w+>' => 'site/tracking',




                'galleryy/<action:\w+>/<id:\d+>' => 'galleryy/<action>',  // Rule for GalleryController
                'galleryy/<action:\w+>' => 'galleryy/<action>',

                'texts/<action:\w+>/<id:\d+>' => 'texts/<action>',  // Rule for GalleryController
                'texts/<action:\w+>' => 'texts/<action>',

            ],
        ],
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => [],
                ],
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
//        'allowedIPs' => ['*', '::1'],
    ];
}

return $config;
