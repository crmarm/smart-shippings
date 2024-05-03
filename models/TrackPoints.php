<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "track_points".
 *
 * @property int $id
 * @property string $date
 * @property string $city
 * @property int|null $track_id
 */
class TrackPoints extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'track_points';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'city'], 'required'],
            [['date'], 'safe'],
            [['track_id'], 'integer'],
            [['city'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'city' => 'City',
            'track_id' => 'Track ID',
        ];
    }
}
