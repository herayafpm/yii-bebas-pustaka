<?php

use yii\db\Migration;

/**
 * Class m220305_065525_create_table_cap
 */
class m220305_065525_create_table_cap extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cap}}',[
            'id' => $this->primaryKey(),
            'nim' => $this->string(255)->notNull()->unique(),
            'id_keterangan' => $this->integer()
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-cap-id_keterangan',
            'cap',
            'id_keterangan'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-cap-id_keterangan',
            'cap',
            'id_keterangan',
            'keterangan',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cap}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220305_065525_create_table_cap cannot be reverted.\n";

        return false;
    }
    */
}
