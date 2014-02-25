<?php
/**
 * Created by PhpStorm.
 * User: vov4ik08
 * Date: 17.02.14
 * Time: 10:03
 */

namespace Apollo;


use yii\web\AssetBundle;

class CustomAssets extends AssetBundle {
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/yii2-select2/assets';


    public $css = [

       'select2-bootstrap3.css'
];
    /**
     * @inheritdoc
     */
    public $js = [



    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',

    ];

} 