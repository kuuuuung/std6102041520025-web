<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%viewing}}`.
 */
class m190413_190844_create_viewing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%viewing}}', [
            'id' => $this->primaryKey(),
            'client_id'=>$this->integer(),
            'property_id'=> $this->integer(),
            'view_date' =>$this->date(),
            'comment'=>$this->string(400)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%viewing}}');
    }
}
