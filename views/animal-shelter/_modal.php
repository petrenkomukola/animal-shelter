<?php

use app\models\AnimalShelter\Animal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'options' => ['class' => 'form-horizontal form-group'],
    'enableClientValidation' => true,
    'action' => '/animal-shelter/add'
]);
?>

    <div class="panel-body">
        <?php
        echo $form->field(
            $model,
            'name',
            ['inputOptions' => ['class' => 'form-control', 'autofocus' => 'autofocus']]
        )->textInput();

        echo $form->field(
            $model,
            'age',
            ['inputOptions' => ['class' => 'form-control', 'autofocus' => 'autofocus']]
        )->input('number');
        echo $form->field(
            $model,
            'type',
            ['inputOptions' => ['class' => 'form-control', 'autofocus' => 'autofocus']]
        )->dropDownList(Animal::getTypes());
        echo Html::submitButton(
            "Add",
            ['class' => 'btn btn-success']
        );
        ?>
    </div>

<?php
ActiveForm::end();
