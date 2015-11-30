<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProyectoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proyectos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyecto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Proyecto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_Proyecto',
            'nombre_proyecto',
            'nombre_corto',
            'descripcion',
            'area',
            // 'id_Anteproyecto',
            // 'id_Canvas',
            // 'id_canvas2',
            // 'id_Negocio',
            // 'id_Financiero',
            // 'id_Legales',
            // 'id_Intelectual',
            // 'resultado',
            // 'objetivo',
            // 'modulo',
            // 'id_Asesor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
