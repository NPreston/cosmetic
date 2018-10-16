<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
            'appendTimestamp' => true
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'baseUrl' => '/',
            'ruleConfig' => ['class' => common\components\UrlRuleFixed::class],
            'rules' => [
                '/' => 'site/index',

                'POST <controller:[\w-]+>s' => '<controller>/create',
                '<controller:[\w-]+>s' => '<controller>/index',

                'PUT <controller:[\w-]+>/<id:\d+>'    => '<controller>/update',
                'DELETE <controller:[\w-]+>/<id:\d+>' => '<controller>/delete',
                '<controller:[\w-]+>/<id:\d+>'        => '<controller>/view',

              /*  "<module:[a-z-]+>/<id:\\d+>" => "<module>/<module>/view",
                "<module:[a-z-]+>/<id:\\d+>/\\w{0}" => "<module>/<module>/view",

                "<module:[a-z-]+>/<action:[a-z-]+>" => "<module>/<module>/<action>",
                "<module:[a-z-]+>/<action:[a-z-]+>/\\w{0}" => "<module>/<module>/<action>",

                "<module:[a-z-]+>/<action:[a-z-]+>/<id:\\d+>" => "<module>/<module>/<action>",
                "<module:[a-z-]+>/<action:[a-z-]+>/<id:\\d+>/\\w{0}" => "<module>/<module>/<action>",*/
            ]
        ]
    ],
];
