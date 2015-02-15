<?php

namespace bariew\commentModule;

class Module extends \yii\base\Module
{
    public $params = [
        'menu'  => [
            'label'    => 'Comment',
            'url' => ['/comment/item/index']
        ]
    ];
}
