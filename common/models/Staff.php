<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $staff_no
 * @property string $frist_name
 * @property string $last_name
 * @property string $position
 * @property string $sex
 * @property string $DOB
 * @property int $salary
 * @property int $branch_id
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DOB'], 'safe'],
            [['salary', 'branch_id'], 'integer'],
            [['staff_no'], 'string', 'max' => 5],
            [['frist_name', 'last_name'], 'string', 'max' => 100],
            [['position'], 'string', 'max' => 50],
            [['sex'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'staff_no' => 'Staff No',
            'frist_name' => 'Frist Name',
            'last_name' => 'Last Name',
            'position' => 'Position',
            'sex' => 'Sex',
            'DOB' => 'Dob',
            'salary' => 'Salary',
            'branch_id' => 'Branch ID',
        ];
    }
}
