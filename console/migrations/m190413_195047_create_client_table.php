<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m190413_195047_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
            'id' => $this->primaryKey(),
            'client_no' =>$this ->String(5),
            'frist_name' =>$this ->String(100),
            'last_name' =>$this ->String(100),
            'telephone' =>$this ->String(11),
            'pref_type' =>$this ->String(100),
            'mex_rent' =>$this ->integer()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}
