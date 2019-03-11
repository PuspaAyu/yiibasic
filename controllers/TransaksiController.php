<?php

namespace app\controllers;

use Yii;
use app\models\Penjualan;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * 
 */
class TransaksiController extends Controller
{

	
	
	public function actionIndex(){
	
		$model =Penjualan::find()->all();
		$query=(new \yii\db\Query())
			->select(['penjualan.id_penjualan','barang.nama_barang','kasir.nama','penjualan.jumlah','penjualan.total','penjualan.date'])
			->from('penjualan')
			->join('LEFT JOIN', 'kasir', 'kasir.id_kasir=penjualan.id_kasir')
			->join('LEFT JOIN', 'barang', 'barang.id_barang=penjualan.id_barang')
			->all();

		return $this->render('index',[
			'query'=>$query,
			'model'=>$model,
		]);
	}
}