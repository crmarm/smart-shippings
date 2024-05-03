<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "managers".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $mail
 */
class Managers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'managers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'mail'], 'string', 'max' => 255],
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
            'phone' => 'Phone',
            'mail' => 'Mail',
        ];
    }
}
