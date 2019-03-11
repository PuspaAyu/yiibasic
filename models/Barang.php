<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id_barang
 * @property string $nama_barang
 * @property int $stok
 * @property double $harga_pokok
 * @property double $harga_jual
 * @property int $ppn
 * @property int $diskon
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'stok', 'harga_pokok', 'harga_jual', 'ppn', 'diskon'], 'required'],
            [['stok', 'ppn', 'diskon'], 'integer'],
            [['harga_pokok', 'harga_jual'], 'number'],
            [['nama_barang'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'stok' => 'Stok',
            'harga_pokok' => 'Harga Pokok',
            'harga_jual' => 'Harga Jual',
            'ppn' => 'Ppn',
            'diskon' => 'Diskon',
        ];
    }
}
