<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasok".
 *
 * @property int $id_pasok
 * @property int $id_distributor
 * @property int $id_barang
 * @property int $jumlah
 * @property string $tanggal
 */
class Pasok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_distributor', 'id_barang', 'jumlah', 'tanggal'], 'required'],
            [['id_distributor', 'id_barang', 'jumlah'], 'integer'],
            [['tanggal'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasok' => 'Id Pasok',
            'id_distributor' => 'Id Distributor',
            'id_barang' => 'Id Barang',
            'jumlah' => 'Jumlah',
            'tanggal' => 'Tanggal',
        ];
    }

    //relasi untuk ambil id distributor
    public function getDistributor(){
        $distributor=Distributor::find()->where(['id_distributor'=>$this->id_distributor])->one();
        return $distributor->nama_distributor;
    }

    //relasi untuk ambil id barang
    public function getBarang(){
        $barang=Barang::find()->where(['id_barang'=>$this->id_barang])->one();
        return $barang->nama_barang;
    }
}
