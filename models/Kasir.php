<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kasir".
 *
 * @property int $id_kasir
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 * @property string $username
 * @property string $password
 */
class Kasir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kasir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'telepon', 'username', 'password'], 'required'],
            [['nama', 'username', 'password'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 150],
            [['telepon'], 'string', 'max' => 14],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kasir' => 'Id Kasir',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
