<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cap".
 *
 * @property int $id
 * @property string $nim
 * @property int|null $id_keterangan
 *
 * @property Keterangan $keterangan
 */
class Cap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim'], 'required'],
            [['id_keterangan'], 'integer'],
            [['nim'], 'string', 'max' => 255],
            [['nim'], 'unique'],
            [['id_keterangan'], 'exist', 'skipOnError' => true, 'targetClass' => Keterangan::className(), 'targetAttribute' => ['id_keterangan' => 'id']],
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
            'id_keterangan' => Yii::t('app', 'Id Keterangan'),
        ];
    }

    /**
     * Gets query for [[Keterangan]].
     *
     * @return \yii\db\ActiveQuery|KeteranganQuery
     */
    public function getKeterangan()
    {
        return $this->hasOne(Keterangan::className(), ['id' => 'id_keterangan']);
    }

    /**
     * {@inheritdoc}
     * @return CapQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CapQuery(get_called_class());
    }
}
