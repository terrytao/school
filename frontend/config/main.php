<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        // the theme is configured here
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/profile',
                'baseUrl' => '@web/themes/profile',
                'pathMap' => [
                    '@app/views' => '@app/themes/profile/views',
                    '@dektrium/user/views' => '@app/views/user',
                ],
            ],
        ],
        // end theme configuration
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    //'sourcePath' => 'your-path',
                    //'css' => ['css/bootstrap.css', 'path/to/custom.css']
                    'js' => [
                        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
                        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'
                    ]
                ],
            ]
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'resume/view/<resumeId:[a-za-z0-9-]+>/<resumeSlug:[a-zA-Z0-9-]+>' => 'resume/view',
                'sign-up' => 'user/registration/register',
                'sign-in' => '/user/security/login',
                'sign-out' => '/user/security/logout'
            ],
        ],
//        'user' => [
//            'identityClass' => 'common\models\User',
//            'enableAutoLogin' => true,
//        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'controllerMap' => [
                'registration' => 'frontend\controllers\user\RegistrationController',
                'admin' => 'frontend\controllers\user\AdminController',
                'security' => 'frontend\controllers\user\SecurityController',
            ],
            'modelMap' => [
                'User' => 'frontend\models\User',
                'RegistrationForm' => 'frontend\models\user\RegistrationForm'
            ],
            'urlRules' => [
                'register2' => 'registration/registerStudent'
            ]
        ],
    ],
    'params' => $params,
];
