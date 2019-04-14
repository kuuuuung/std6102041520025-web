<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%privateOwner}}`.
 */
class m190413_194246_create_privateOwner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%privateOwner}}', [
            'id' => $this->primaryKey(),
            'owner_no' =>$this ->String(5),
            'frist_name' =>$this ->String(100),
            'last_name' =>$this ->String(100),
            'address' =>$this ->String(200),
            'telephone' =>$this ->String(11),
            'user_id' =>$this ->integer()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%privateOwner}}');
    }
}
