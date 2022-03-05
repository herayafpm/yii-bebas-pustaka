<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Keterangan]].
 *
 * @see Keterangan
 */
class KeteranganQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Keterangan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Keterangan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
