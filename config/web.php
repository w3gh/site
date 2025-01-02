<?php

$params = require(__DIR__ . '/params.php');
$db     = require(__DIR__ . '/db.php');

require_once(__DIR__ . '/functions.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'extensions' => require(__DIR__ . '/../vendor/yiisoft/extensions.php'),
    'modules' => [
//        'user' => [
//            'class' => 'amnah\yii2\user\Module',
//            //'emailConfirmation' => false,
//            //'useEmail' => false,
//            // set custom module properties here ...
//        ],
//        'qa' => [
//            'class' => 'artkost\qa\Module',
//            'userClass' => 'amnah\yii2\user\models\User',
//            'userNameFormatter' => 'getDisplayName',
//        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'user' => [
//            'class' => 'amnah\yii2\user\components\User',
//            //'identityClass' => 'app\models\User',
//            'enableAutoLogin' => true,
//        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'cache' => false,
            'rules' => [
                '' => 'site/index',
                'user-guide/<id>' => 'site/guide',
                'user-guide' => 'site/guide',
                'download' => 'site/download',

                'qa' => 'qa/default/index',
                'qa/ask' => 'qa/default/ask',
                'qa/<id>-<alias>' => 'qa/default/view',
                [
                    'pattern' => 'index\.php\?page=6;',
                    'route' => 'site/guide',
                    'defaults' => [
                        'id' => 'general.commands',
                    ],
                ],
            ],
        ],
        'log' => [
            'traceLevel' => 3,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
];

$whitelist = array(
    '127.0.0.1',
    '::1'
);

$in_whitelist = !in_array($_SERVER['REMOTE_ADDR'], $whitelist);

if (YII_ENV_DEV || $in_whitelist)
{
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][]                              = 'debug';
    $config['components']['assetManager']['linkAssets'] = true;
    $config['modules']['debug']                         = 'yii\debug\Module';
    $config['modules']['gii']                           = 'yii\gii\Module';
}

return $config;
