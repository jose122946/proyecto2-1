<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProyectoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyecto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_Proyecto') ?>

    <?= $form->field($model, 'nombre_proyecto') ?>

    <?= $form->field($model, 'nombre_corto') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'id_Anteproyecto') ?>

    <?php // echo $form->field($model, 'id_Canvas') ?>

    <?php // echo $form->field($model, 'id_canvas2') ?>

    <?php // echo $form->field($model, 'id_Negocio') ?>

    <?php // echo $form->field($model, 'id_Financiero') ?>

    <?php // echo $form->field($model, 'id_Legales') ?>

    <?php // echo $form->field($model, 'id_Intelectual') ?>

    <?php // echo $form->field($model, 'resultado') ?>

    <?php // echo $form->field($model, 'objetivo') ?>

    <?php // echo $form->field($model, 'modulo') ?>

    <?php // echo $form->field($model, 'id_Asesor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
