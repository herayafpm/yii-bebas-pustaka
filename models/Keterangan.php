<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keterangan".
 *
 * @property int $id
 * @property string|null $keterangan
 *
 * @property Ttd[] $ttds
 */
class Keterangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keterangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'keterangan' => Yii::t('app', 'Keterangan'),
        ];
    }

    /**
     * Gets query for [[Keterangans]].
     *
     * @return \yii\db\ActiveQuery|KeteranganQuery
     */
    public function getKeterangans()
    {
        return $this->hasMany(Keterangan::className(), ['id_keterangan' => 'id']);
    }

    public function cekTTD($nim)
    {
        $model = new Ttd();
        return $model->find()->where(['nim' => $nim,'id_keterangan' => $this->id])->count();
    }
    public function cekCap($nim)
    {
        $model = new Cap();
        return $model->find()->where(['nim' => $nim,'id_keterangan' => $this->id])->count();
    }

    /**
     * {@inheritdoc}
     * @return KeteranganQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KeteranganQuery(get_called_class());
    }
}
