<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bebas_pustaka".
 *
 * @property int $id
 * @property string $nim
 * @property int|null $id_pustaka
 *
 * @property Pustaka $pustaka
 */
class BebasPustaka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bebas_pustaka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim'], 'required'],
            [['id_pustaka'], 'integer'],
            [['nim'], 'string', 'max' => 255],
            [['nim'], 'unique'],
            [['id_pustaka'], 'exist', 'skipOnError' => true, 'targetClass' => Pustaka::className(), 'targetAttribute' => ['id_pustaka' => 'id']],
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
            'id_pustaka' => Yii::t('app', 'Id Pustaka'),
        ];
    }

    /**
     * Gets query for [[Pustaka]].
     *
     * @return \yii\db\ActiveQuery|PustakaQuery
     */
    public function getPustaka()
    {
        return $this->hasOne(Pustaka::className(), ['id' => 'id_pustaka']);
    }

    /**
     * {@inheritdoc}
     * @return BebasPustakaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BebasPustakaQuery(get_called_class());
    }
}
