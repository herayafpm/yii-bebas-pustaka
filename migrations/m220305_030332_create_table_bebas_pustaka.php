<?php

use yii\db\Migration;

/**
 * Class m220305_030332_create_table_bebas_pustaka
 */
class m220305_030332_create_table_bebas_pustaka extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bebas_pustaka}}',[
            'id' => $this->primaryKey(),
            'nim' => $this->string(255)->notNull()->unique(),
            'id_pustaka' => $this->integer()
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-bebas_pustaka-id_pustaka',
            'bebas_pustaka',
            'id_pustaka'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-bebas_pustaka-id_pustaka',
            'bebas_pustaka',
            'id_pustaka',
            'pustaka',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bebas_pustaka}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220305_030332_create_table_bebas_pustaka cannot be reverted.\n";

        return false;
    }
    */
}
