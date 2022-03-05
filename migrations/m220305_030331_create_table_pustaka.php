<?php

use app\models\Pustaka;
use yii\db\Migration;

/**
 * Class m220305_030404_create_table_pustaka
 */
class m220305_030331_create_table_pustaka extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pustaka}}',[
            'id' => $this->primaryKey(),
            'pustaka' => $this->string(255),
        ]);
        $pustaka = new Pustaka();
        $pustaka->pustaka = 'Pustaka 1';
        $pustaka->save();
        $pustaka = new Pustaka();
        $pustaka->pustaka = 'Pustaka 2';
        $pustaka->save();
        $pustaka = new Pustaka();
        $pustaka->pustaka = 'Pustaka 3';
        $pustaka->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pustaka}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220305_030404_create_table_pustaka cannot be reverted.\n";

        return false;
    }
    */
}
