<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'user' => [
            'class' => 'frontend\modules\user\UserModule',
        ],
        'forum' => [
            'class' => 'frontend\modules\forum\ForumModule',
        ],
        'gallery' => [
            'class' => 'frontend\modules\gallery\GalleryModule',
        ],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\GoogleOAuth',
                    'clientId' => '976194090754-i55cukqj0r7ucmm6ff013m98vhl864dt.apps.googleusercontent.com',
                    'clientSecret' => '1S9ZgePNk2SrzPvEiAZw7REm',
                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => '502205273320053',
                    'clientSecret' => 'e057ff8356562a024941a09b4845a127',
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable r= routes
            'enablePrettyUrl' => true,
            'showScriptName' => false, // Disable index.php
            'enablePrettyUrl' => true, // Disable r= routes
            'rules' => [
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module/<controller>/<action>',
                'member/<id:\w+>' => 'user/default/index',
                '<controller:\w+>/<action:\w+>/<id:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ]
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => [
                        YII_ENV_DEV ? 'jquery.js' : 'jquery.min.js'
                    ]
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [
                        YII_ENV_DEV ? 'css/bootstrap.min.css' : 'css/bootstrap.css',
                    ],
                    'js' => [
                        YII_ENV_DEV ? 'js/bootstrap.min.js' : 'js/bootstrap.js',
                    ]
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@frontend/views' => '@frontend/web/themes/giicms',
                    '@frontend/widgets' => '@frontend/web/themes/giicms/widgets',
                ],
                'baseUrl' => '@web/themes/giicms',
            ],
        ],
        'imagick' => [
            'class' => 'common\components\Imagicks',
        ],
    ],
    'params' => $params,
];
