<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distributor".
 *
 * @property int $id_distributor
 * @property string $nama_distributor
 * @property string $alamat
 * @property string $telepon
 */
class Distributor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'distributor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_distributor', 'alamat', 'telepon'], 'required'],
            [['nama_distributor', 'alamat'], 'string', 'max' => 50],
            [['telepon'], 'string', 'max' => 14],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_distributor' => 'Id Distributor',
            'nama_distributor' => 'Nama Distributor',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
        ];
    }
}
