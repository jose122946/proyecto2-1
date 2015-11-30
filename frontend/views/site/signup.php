<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\models\Carreras;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

$this->title = 'Registro, Registro Alumno,  Alumno';
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
            'options' => ['class' => 'yo2'],
            'items' => $menuItems,
        ]);
        NavBar::end();
     ?>
    <!-- lo que no entiendo es donde esta esa clases para cambiar... lo que entiendo es que como el contenedos es dinamico
    esta agrarrando la misma..
    o  tu que  piensas? ps yo pienso que cambiando de contenedor si se pueda , pero por ejemplo a este no lo puedo
cambiar...
almenos que le cambie al del menu..-->

    <div class="divide">
        <div class="col-lg-7">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
<?Pjax::begin(['enablePushState' => false,'enableReplaceState' =>false]);?><?
    $carrera = Carreras::find()->all();
    $listacarrera = ArrayHelper::map($carrera,'id_Carrera','nombre_carrera');
?>
                <?= $form->field($model, 'username')->label('Nombre de usuario') ?>
                
                <?= $form->field($model, 'password')->passwordInput()->label('Contraseña') ?>

                <?= $form->field($model, 'email') ->label('Correo Electronico') ?>

                <?= $form->field($model, 'nombre')->textInput()->label('Nombre Completo') ?>

                <?= $form->field($model, 'apaterno')->textInput()->label('Apellido Paterno') ?>

                <?= $form->field($model, 'amaterno')->textInput()->label('Apellido Materno') ?>

                <?= $form->field($model, 'matricula')->textInput()->label('Matricula') ?>

                <?= $form->field($model, 'celular')->textInput()->label('Celular') ?>

                <?= $form->field($model, 'sexo')->radioList(array('1'=>'Masculino',2=>'Femenino'),['class'=>'flot-righ'])->label('Sexo'); ?>
               
                
               
                <?php echo $form->field($model, 'id_carrera')->dropDownList($listacarrera, ['prompt'=>'Selecciona Carrera',
                 'onChange' => '$.post(" '.Yii::$app->urlManager->createUrl(["site/plan"]).'",{valor:value},
                function(data)
                {
                    $("select#llena").html(data);
                }
                )'])->label('Carrera');?>

                <?php //echo $form->field($model, 'name')->dropDownList($listData)->label('Plan');?>

                
                    <?
                        //$plan = $model1;
                     
                     echo $form->field($model,'id_plan')->dropDownList([''=>''],['prompt' => 'selecciona un plan','id'=>'llena']) ;   


                    
                    ?>

                <?Pjax::end();?>

              <div class="contenido">  </div>

                    <?php
?>
                



                <div class="form-group">
                    <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


