<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[BebasPustaka]].
 *
 * @see BebasPustaka
 */
class BebasPustakaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return BebasPustaka[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return BebasPustaka|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
