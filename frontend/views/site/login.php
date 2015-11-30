<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

$this->title = 'Sesión';
//$this->params['breadcrumbs'][] = $this->title;
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


    <div id="inicios" class="divide"> <!-- esta es la clase que tengo que componer para que sea responsiva -->

        <div class="col-lg-10">
            <h1 class="salto"><?= Html::encode($this->title) ?></h1>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->label('Nombre de usuario') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Contraseña') ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    Olvidastes tu Password, Resetea <?= Html::a('Aquí', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Iniciar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    
    </div>

