<?php
/**
 * Created by PhpStorm.
 * User: daimajie
 * Date: 2018/9/20
 * Time: 21:26
 */
return [
    'layout' => 'main',
    'defaultRoute' => '/admin/index/index',
    'modules' => [
        'blog' => [
            'class' => 'app\modules\admin\modules\blog\Module',
        ],
        'topic' => [
            'class' => 'app\modules\admin\modules\topic\Module',
        ],
        'zones' => [
            'class' => 'app\modules\admin\modules\zones\Module',
        ],
        'setting' => [
            'class' => 'app\modules\admin\modules\setting\Module',
        ],
        'member' => [
            'class' => 'app\modules\admin\modules\member\Module',
        ],
        'comment' => [
            'class' => 'app\modules\admin\modules\comment\Module',
        ],
        'operate' => [
            'class' => 'app\modules\admin\modules\operate\Module',
        ],

    ],
    'components' => [
        // list of component configurations
    ],
    'params' => [
        // list of parameters
    ],
];