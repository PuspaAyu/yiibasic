<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PasokSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasok-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pasok') ?>

    <?= $form->field($model, 'id_distributor') ?>

    <?= $form->field($model, 'id_barang') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'tanggal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
