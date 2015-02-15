<?php
/**
 * Module class file.
 * @copyright (c) 2014, bariew
 * @license http://www.opensource.org/licenses/bsd-license.php
 */

namespace bariew\commentModule;

/**
 * Module class for comments.
 * @author Pavel Bariev <bariew@yandex.ru>
 */
class Module extends \yii\base\Module
{
    public $params = [
        'menu'  => [
            'label'    => 'Comment',
            'url' => ['/comment/item/index']
        ]
    ];
}
