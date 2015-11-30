<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MensajesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mensajes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_Mensaje') ?>

    <?= $form->field($model, 'id_Emisor') ?>

    <?= $form->field($model, 'id_Receptor') ?>

    <?= $form->field($model, 'mensaje') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
