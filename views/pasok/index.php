<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasokSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasoks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasok-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pasok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pasok',
            'id_distributor',
            'id_barang',
            'jumlah',
            'tanggal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
