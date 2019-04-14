<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%propertyForRent}}`.
 */
class m190413_200516_create_propertyForRent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%propertyForRent}}', [
            'id' => $this->primaryKey(),
            'property_no' =>$this ->String(5),
            'type' =>$this ->String(50),
            'room' =>$this ->integer(),
            'owner_id'=> $this->integer(),
            'staff_id'=> $this->integer(),
            'branch_id'=> $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%propertyForRent}}');
    }
}
