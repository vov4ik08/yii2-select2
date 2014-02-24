#This widget for you select2 v3.4.5 (http://ivaynberg.github.io/select2/)
# Example:

/*  $form->field($model, 'users_to')->widget(\Apollo\Select2Field::className(), [

        'clientOptions' => [
            'allowClear' => true,
            'language' => 'ru',
            'maximumSelectionSize'=>'3',
            'multiple' => 'false',
            'minimumInputLength' => '3',
              'placeholder'=>"Search for a movie",
            'ajax' => [
                'url' => Yii::$app->urlManager->createUrl('URL'),
                'dataType' => 'json',
                'data' => new yii\web\JsExpression('function (term) {

                                                    return {
                                                        username: term, // search term

                                                        } ;
 }'),



                'results' => new yii\web\JsExpression('function (data) { // parse the results into the format expected by Select2.
 var myResults = [];
$.each(data, function (index, item) {
 myResults.push({
 id: item.id,
  text: item.FIO + " " + (item.login)
 });

});
                                            return {

                                              results: myResults
                                                 };
 }')


            ],

        ]

    ])
*/



