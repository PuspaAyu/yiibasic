<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KasirSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kasirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasir-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kasir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kasir',
            'nama',
            'alamat',
            'telepon',
            'username',
            //'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
