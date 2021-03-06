<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Distributor */

$this->title = 'Update Distributor: ' . $model->id_distributor;
$this->params['breadcrumbs'][] = ['label' => 'Distributors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_distributor, 'url' => ['view', 'id' => $model->id_distributor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="distributor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
