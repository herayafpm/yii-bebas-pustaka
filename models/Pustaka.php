<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pustaka".
 *
 * @property int $id
 * @property string|null $pustaka
 *
 * @property BebasPustaka[] $bebasPustakas
 */
class Pustaka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pustaka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pustaka'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'pustaka' => Yii::t('app', 'Pustaka'),
        ];
    }

    /**
     * Gets query for [[BebasPustakas]].
     *
     * @return \yii\db\ActiveQuery|BebasPustakaQuery
     */
    public function getBebasPustakas()
    {
        return $this->hasMany(BebasPustaka::className(), ['id_pustaka' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return PustakaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PustakaQuery(get_called_class());
    }
}
