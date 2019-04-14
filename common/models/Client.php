<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $client_no
 * @property string $frist_name
 * @property string $last_name
 * @property string $telephone
 * @property string $pref_type
 * @property int $mex_rent
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mex_rent'], 'integer'],
            [['client_no'], 'string', 'max' => 5],
            [['frist_name', 'last_name', 'pref_type'], 'string', 'max' => 100],
            [['telephone'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_no' => 'Client No',
            'frist_name' => 'Frist Name',
            'last_name' => 'Last Name',
            'telephone' => 'Telephone',
            'pref_type' => 'Pref Type',
            'mex_rent' => 'Mex Rent',
        ];
    }
}
