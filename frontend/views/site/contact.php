<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

$this->title = 'Contactanos, Contacto,Comentario';
// $this->params['breadcrumbs'][] = $this->title;
?>
 <div class="row">

     <?php 
        NavBar::begin([
            
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse ',
            ],
        ]);
        $menuItems = [
            ['label' => 'HOME', 'url' => ['/site/index']],
            ['label' => 'Registro Alumno', 'url' => ['/site/signup']],
            ['label' => 'Convocatoria', 'url' => ['/site/convocatoria']],
            ['label' => 'Inicio de Sesion', 'url' => ['/site/login']],
            ['label' => 'Contactanos', 'url' => ['/site/contact']],
        ];
    
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-left'],
            'items' => $menuItems,
        ]);
        NavBar::end();
     ?>
 </div>
<div class="site-contact">

   

    <div class="divide">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name') ->label('Nombre Completo')?>

                <?= $form->field($model, 'email')->label('Correo Electronico') ?>

                <?= $form->field($model, 'subject')->label('Telefono') ?>

                <?= $form->field($model, 'body')->textArea(['rows' => 6])->label('Comentario') ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
