<?php

use yii\db\Migration;

/**
 * Class m220305_030332_create_table_ttd
 */
class m220305_030332_create_table_ttd extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ttd}}',[
            'id' => $this->primaryKey(),
            'nim' => $this->string(255)->notNull()->unique(),
            'id_keterangan' => $this->integer()
        ]);
        // creates index for column `author_id`
        $this->createIndex(
            'idx-ttd-id_keterangan',
            'ttd',
            'id_keterangan'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-ttd-id_keterangan',
            'ttd',
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
        $this->dropTable('{{%ttd}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220305_030332_create_table_ttd cannot be reverted.\n";

        return false;
    }
    */
}
