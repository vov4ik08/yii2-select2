<?php
/**
 * Created by PhpStorm.
 * User: vov4ik08
 * Date: 17.02.14
 * Time: 10:03
 */

namespace Apollo;

//    'Apollo\\' => array('/Applications/MAMP/htdocs/crm/backend/common/yii2-select2'),

use yii\web\AssetBundle;

class CustomAssets extends AssetBundle {
    /**
     * @inheritdoc
     */
    public $sourcePath = '@backend/common/yii2-select2/assets';


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