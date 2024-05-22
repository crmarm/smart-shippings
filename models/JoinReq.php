<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "join_req".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $lastname
 * @property string|null $email
 * @property string|null $department
 * @property string|null $message
 */
class JoinReq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'join_req';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['email'], 'unique'],
            [['name', 'lastname', 'email', 'department'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'department' => 'Department',
            'message' => 'Message',
        ];
    }
}
