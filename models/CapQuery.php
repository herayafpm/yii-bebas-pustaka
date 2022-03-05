<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cap]].
 *
 * @see Cap
 */
class CapQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cap[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cap|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
