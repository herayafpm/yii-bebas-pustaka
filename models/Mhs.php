<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mhs".
 *
 * @property int $id
 * @property string $nim
 * @property string|null $nama
 * @property string|null $jurusan
 */
class Mhs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mhs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim'], 'required'],
            [['nim', 'nama', 'jurusan'], 'string', 'max' => 255],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nim' => Yii::t('app', 'Nim'),
            'nama' => Yii::t('app', 'Nama'),
            'jurusan' => Yii::t('app', 'Jurusan'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return MhsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MhsQuery(get_called_class());
    }
}
