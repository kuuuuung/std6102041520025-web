<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "propertyforrent".
 *
 * @property int $id
 * @property string $property_no
 * @property string $type
 * @property int $room
 * @property int $owner_id
 * @property int $staff_id
 * @property int $branch_id
 */
class Propertyforrent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propertyforrent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room', 'owner_id', 'staff_id', 'branch_id'], 'integer'],
            [['property_no'], 'string', 'max' => 5],
            [['type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_no' => 'Property No',
            'type' => 'Type',
            'room' => 'Room',
            'owner_id' => 'Owner ID',
            'staff_id' => 'Staff ID',
            'branch_id' => 'Branch ID',
        ];
    }
}
