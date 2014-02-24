<?php
/**
 * Created by PhpStorm.
 * User: vov4ik08
 * Date: 17.02.14
 * Time: 10:03
 */

namespace Apollo;

//    'Apollo\\' => array('/Applications/MAMP/htdocs/crm/backend/common/yii2-select2'),
//https://github.com/Venu85/yii2-select2/blob/master/yii/select2/Select2.php

use yii\web\AssetBundle;

class Select2Assets extends AssetBundle {
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/ivaynberg/select2';


    public $css = [
        'select2.css',
];
    /**
     * @inheritdoc
     */
    public $js = [

        'select2.js',

    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];

} 