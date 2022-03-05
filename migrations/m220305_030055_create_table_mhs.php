<?php

use app\models\Mhs;
use yii\db\Migration;

/**
 * Class m220305_030055_create_table_mhs
 */
class m220305_030055_create_table_mhs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mhs}}',[
            'id' => $this->primaryKey(),
            'nim' => $this->string(255)->notNull()->unique(),
            'nama' => $this->string(255),
            'jurusan' => $this->string(255),
        ]);
        $mhs = new Mhs();
        $mhs->nama = 'heraya';
        $mhs->nim = '17.12.0100';
        $mhs->jurusan = 'Sistem Informasi';
        $mhs->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mhs}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220305_030055_create_table_mhs cannot be reverted.\n";

        return false;
    }
    */
}
