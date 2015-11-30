<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Se ha producido un error mientras el servidor web procesaba su solicitud.
    </p>
    <p>
        Póngase en contacto con nosotros si su error sigue apareciendo. Gracias.
    </p>

</div>
