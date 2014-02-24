<?php
/**
 * Created by PhpStorm.
 * User: vov4ik08
 * Date: 17.02.14
 * Time: 10:01
 */

namespace Apollo;


use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class Select2Field extends InputWidget {
    public $data;
    public $clientOptions;
    public $language=false;
    public function run()
    {
        $view = $this->getView();
        CustomAssets::register($view);

        $select2=Select2Assets::register($view);
        if(!$this->language)
        {
            $this->language=\Yii::$app->language;

        }

        array_push($select2->js,"select2_locale_$this->language.js");



            $this->renderWidget();
    }

    private function renderWidget()
    {
        $clientOptions=Json::encode($this->clientOptions);
        $formName=mb_strtolower($this->model->formName());

        $this->getView()->registerJs("$('#$formName-$this->attribute').select2($clientOptions);");
        if (isset($this->clientOptions['ajax'])) {
            echo  Html::activeTextInput($this->model, $this->attribute, $this->options);
        }
        else
        {
            echo Html::activeDropDownList($this->model, $this->attribute, $this->data, $this->options);
        }
    }

} 