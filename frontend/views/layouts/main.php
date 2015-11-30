<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Progress;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\widgets\Menu;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="<?=Yii::getAlias('@web');?>/css/estilo.css"> 
    <link rel="stylesheet" href="<?=Yii::getAlias('@web');?>/css/estiloresponsivo.css"> 
    
    

</head>
<body>
<?php $this->beginBody()//estas son algunas etiquetas que pone yii para saber donde empieza 
//tu body ?>


<div class="wrap">
    <header>
        <div id="logotec">
            <figure id="lotec">
                <img id="lgtec" src="<?=Yii::getAlias('@web');?>/imagenes/logotec.png" alt="">
            </figure>
        </div>

        <div id="contenlogos">
            <div id="logosnacionales">
                <figure id="lonac">
                    <img id="lgnac" src="<?=Yii::getAlias('@web');?>/imagenes/logonacional.png" alt="">
                </figure>
                <figure id="losep">
                    <img id="lgsep" src="<?=Yii::getAlias('@web');?>/imagenes/logosep.png" alt="">
                </figure>
            </div>

            <div id="titulos">
                <h1 id="titnac">TECNOLÓGICO NACIONAL DE MÉXICO</h1>
                <h2 id="titmerida">INSTITUTO TECNOLÓGICO DE MÉRIDA</h2>
                <h3 id="titdep">Departamento de Gestión Tecnológica y Vinculación</h3>
            </div>
        </div>
    </header>
    <?
if(Yii::$app->user->isGuest)
{?><section class="container2"> 
    <div id="modulos">
        <div id="modulo1">
                <?= Html::a(Html::img(Yii::getAlias('@web')."/imagenes/academico.jpg", ['class' => 'academico']), ['/site/signup'], ['option' => 'value']); ?>
                <p class="titaca">Académico</p>
        </div>
        <div id="modulo2">
            <?= Html::a(Html::img(Yii::getAlias('@web')."/imagenes/emprendedor.jpg", ['class' => 'academico']), ['/site/signup'], ['option' => 'value']); ?>
            <p class="titaca">Emprendedor</p>
        </div>
        <div id="modulo3">
            <?= Html::a(Html::img(Yii::getAlias('@web')."/imagenes/incubadora.jpg", ['class' => 'academico']), ['/site/signup'], ['option' => 'value']); ?>
            <p class="titaca">Incubación</p>
        </div>
        <div id="modulo4">
            <?= Html::a(Html::img(Yii::getAlias('@web')."/imagenes/ott.jpg", ['class' => 'academico']), ['/site/signup'], ['option' => 'value']); ?>
            <p class="titott">OTT</p> </a>
        </div>
    </div>
    <div id="obav">
        <div id="objetivo">
            <h1 id="titobj">Objetivo</h1>
            
            <p id="des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus odit eius repudiandae, architecto aut quo explicabo blanditiis modi aperiam at qui, quisquam, quidem vero ex exercitationem. Distinctio dolores commodi vero.</p>
        </div>
        <div id="aviso">
            <h1 id="titobj">Avisos</h1>
            
            <p id="desavi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est necessitatibus deleniti harum inventore quo! Cumque excepturi debitis officia perspiciatis nesciunt pariatur dicta omnis ab ea, iure rem sit culpa molestiae!</p>
        </div>
    </div>
</section><?}?>

    <section class="Sconten">

    <?php
    if (!Yii::$app->user->isGuest)
    
    {
        // sabes xke , porque es label, no crees?? pero checate el html que se genera en el navegador
         //que raro
        // hola
        $menuItems = [
      
            ['label' =>  Html::img(Yii::getAlias('@web')."/imagenes/cliente.jpg", ['id' => 'imgEstudiante']),'url' =>'#','encode' => false,
            'options' =>['style' =>'text-align:center; list-style: none;','class' =>'perfil'],
            ],
            ['label' =>Yii::$app->user->identity->nombre.' '.Yii::$app->user->identity->apaterno.' '.Yii::$app->user->identity->amaterno, 'url' => ['/site/index'],
            'options'=>['style' =>'text-align:center; font-size:18px;list-style: none;','class'=>'perfil']],
            ['label' => 'Información General', 'url' => '#'],
            ['label' => 'Modulo Incubación', 'url' => '#','options' =>['class' =>'menu2 menu'],'items' => [
                ['label' => 'Canvas', 'url' => ['product/index', 'tag' => 'new']],
                ['label' => 'Modelo de negocios', 'url' => ['product/index', 'tag' => 'popular']],

                'options' =>['class' =>'nav nav-bar borde'],
            ]],
            ['label' => 'Mensajes', 'url' => ['/site/about']],

        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        } else {
                $menuItems[] = [
                'label' => ' Cerrar Session(' . Yii::$app->user->identity->username . ')',
                'url' => ['/site/logout'],
                'linkOptions' => ['data-method' => 'post']
            ];
        }
        echo Menu::widget([
            'items' =>$menuItems,
            'options' => ['class' => 'izqui2'],
            'itemOptions'=>['class' =>'menu'],
            ]);
        }

    ?>
    

    
    <!--  hay otra forma de poderlo solucionar...? si mira siempre con if volveremos a lo mas basico de php jeje-->
    
    <div class="<?if (Yii::$app->user->isGuest) {
        echo 'container6';
    }
    else{echo 'container3';}?>">   <!-- aqui le cambio vea..? si pero lo que no creo que se pueda es que todo lo del main se repite en todas las vistas -->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) //el breadcumbs es una clase de yii que pone como que la ruta de donde estas?>
        <?= Alert::widget() ?>
        <p>Hola</p>
        <?= $content //el contenido de las vistas a las que llamas?>
    </div>
    </section>
</div>

<footer class="footer">
    <!-- <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div> -->

    <div id="pie">
        <figure id="sep">
            <img src="/Github/proyecto/assets/imagenes/logosep.png" alt="" id="figsep">
        </figure>
        <p id="direcc">
            Instituto Tecnológico de Mérida <br>
            Departamento de Sistemas y Computación <br>
            Av. Tecnológico km 4.5 S/N, C.P. 97118
            Mérida, Yucatán, México</p>
    </div>
    <p id="derechos">©INSTITUTO TECNOLOGICO DE MERIDA 2015.</p>
</footer>

<?php $this->endBody() //ya jaja?>
<script src="<?=Yii::getAlias('@web');?>/js/oculta.js"></script>
</body>
</html>
<?php $this->endPage() ?>
