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
 </div>


    <div id="inicios" class="divide"> <!-- esta es la clase que tengo que componer para que sea responsiva -->

        <div class="col-lg-10">
           
    </div>
    
    </div>

