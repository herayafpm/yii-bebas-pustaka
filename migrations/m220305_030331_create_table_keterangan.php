<?php

use app\models\Keterangan;
use yii\db\Migration;

/**
 * Class m220305_030404_create_table_keterangan
 */
class m220305_030331_create_table_keterangan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%keterangan}}',[
            'id' => $this->primaryKey(),
            'keterangan' => $this->string(255),
        ]);
        $keterangan = new Keterangan();
        $keterangan->keterangan = 'keterangan 1';
        $keterangan->save();
        $keterangan = new Keterangan();
        $keterangan->keterangan = 'keterangan 2';
        $keterangan->save();
        $keterangan = new Keterangan();
        $keterangan->keterangan = 'keterangan 3';
        $keterangan->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%keterangan}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220305_030404_create_table_keterangan cannot be reverted.\n";

        return false;
    }
    */
}
