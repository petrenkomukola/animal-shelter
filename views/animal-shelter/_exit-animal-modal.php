<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin([
    'options' => ['class' => 'form-horizontal form-group'],
    'enableClientValidation' => true,
    'action' => '/animal-shelter/exit'
]);
?>

<div class="panel-body">
    <div class="form-group">
    <?= Html::dropDownList('type', null, $types); ?>
    <?php echo Html::submitButton("Transfer an animal to a person", ['class' => 'btn btn-success'] );?>
    </div>
</div>
<?php
ActiveForm::end();
