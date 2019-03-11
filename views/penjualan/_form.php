<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Kasir;
use app\models\Barang;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Penjualan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_barang')->widget(Select2::className(),[
            'data' => \yii\helpers\ArrayHelper::map(Barang::find()->all(),'id_barang','nama_barang'),
            'options' => ['placeholder' => 'Pilih Barang'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) ?>

    
    <?= $form->field($model, 'id_kasir')->widget(Select2::className(),[
            'data' => \yii\helpers\ArrayHelper::map(Kasir::find()->all(),'id_kasir','nama'),
            'options' => ['placeholder' => 'Pilih Nama'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?php echo '<label class="control-label">Tanggal Penjualan</label>';
            echo DatePicker::widget([
                'model' => $model,
                'attribute' => 'date',
                'name' => 'dp_3',
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'value' => '23-Feb-1982',
                'pluginOptions' => [
                    'autoclose'=>true,
               
                    'format' => 'yyyy-mm-dd'
                ]
            ]); 
    ?>
    <br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
