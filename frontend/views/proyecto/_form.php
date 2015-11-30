<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Proyecto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyecto-form">
    
    <?php $form = ActiveForm::begin(); ?>
    <?//$listaArea = ['salud','salud'];?>
    <?$listaArea =array('1' =>'area' );?>
    <?= $form->field($model, 'nombre_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_corto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->dropDownList($listaArea,['prompt' => 'Seleccione un area']) ?>

    <?= $form->field($model, 'id_Anteproyecto')->textInput() ?>

    <?= $form->field($model, 'id_Canvas')->textInput() ?>

    <?= $form->field($model, 'id_canvas2')->textInput() ?>

    <?= $form->field($model, 'id_Negocio')->textInput() ?>

    <?= $form->field($model, 'id_Financiero')->textInput() ?>

    <?= $form->field($model, 'id_Legales')->textInput() ?>

    <?= $form->field($model, 'id_Intelectual')->textInput() ?>

    <?= $form->field($model, 'resultado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'objetivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modulo')->textInput() ?>

    <?= $form->field($model, 'id_Asesor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
