<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property int $id_penjualan
 * @property string $id_barang
 * @property int $id_kasir
 * @property int $jumlah
 * @property double $total
 * @property string $date
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'id_kasir', 'jumlah', 'total', 'date'], 'required'],
            [['id_kasir', 'jumlah'], 'integer'],
            [['total'], 'number'],
            [['date'], 'safe'],
            [['id_barang'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penjualan' => 'Id Penjualan',
            'id_barang' => 'Id Barang',
            'id_kasir' => 'Id Kasir',
            'jumlah' => 'Jumlah',
            'total' => 'Total',
            'date' => 'Date',
        ];
    }

    //relasi untuk ambil id kasir
    public function getKasir(){
        $kasir=Kasir::find()->where(['id_kasir'=>$this->id_kasir])->one();
        return $kasir->nama;
    }

    //relasi untuk ambil nama barang
    public function getBarang(){
        $barang=Barang::find()->where(['id_barang'=>$this->id_barang])->one();
        return $barang->nama_barang;
    }
}
