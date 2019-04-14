<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "privateowner".
 *
 * @property int $id
 * @property string $owner_no
 * @property string $frist_name
 * @property string $last_name
 * @property string $address
 * @property string $telephon
 * @property int $user_id
 */
class Privateowner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'privateowner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['owner_no'], 'string', 'max' => 5],
            [['frist_name', 'last_name'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 200],
            [['telephon'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_no' => 'Owner No',
            'frist_name' => 'Frist Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'telephon' => 'Telephon',
            'user_id' => 'User ID',
        ];
    }
}
