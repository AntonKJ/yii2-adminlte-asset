<?php

return [
    'defaultRoute' => 'test',
    'aliases' => [
        'repo' => '/repo',
        'tests/app' => '@repo/tests/_app',
        'antonkj' => '/repo',
        '@antonkj/web' => '/repo/web',
        '@antonkj/widgets' => '/repo/widgets',
        '@antonkj/helpers' => '/repo/helpers',
    ],
    'controllerNamespace' => 'tests\app\controllers',
    'components' => [
        'urlManager' => [
            'rules' => [
                'param/<id>' => 'sub/action/param'
            ]
        ]
    ]
];