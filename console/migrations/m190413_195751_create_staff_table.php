<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%staff}}`.
 */
class m190413_195751_create_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staff}}', [
            'id' => $this->primaryKey(),
            'staff_no' =>$this ->String(5),
            'frist_name' =>$this ->String(100),
            'last_name' =>$this ->String(100),
            'position' =>$this ->String(50),
            'sex' =>$this ->String(3),
            'DOB' =>$this ->date(),
            'salary' =>$this ->integer(),
            'branch_id' =>$this ->integer()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staff}}');
    }
}
