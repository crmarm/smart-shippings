<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tracking".
 *
 * @property int $id
 * @property string|null $item_id
 * @property string|null $bx_user_id
 * @property string|null $cordinator_id
 * @property string|null $loading_date
 * @property int|null $status
 * @property string|null $comment
 */
class Tracking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tracking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['loading_date'], 'safe'],
            [['status'], 'integer'],
            [['comment'], 'string'],
            [['item_id', 'bx_user_id', 'cordinator_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'bx_user_id' => 'Bx User ID',
            'cordinator_id' => 'Cordinator ID',
            'loading_date' => 'Loading Date',
            'status' => 'Status',
            'comment' => 'Comment',
        ];
    }

    public function getPoints()
    {
        return $this->hasMany(TrackPoints::class, ['track_id' => 'id']);
    }
    public function getItem()
    {
        return $this->hasOne(Items::class, ['id' => 'item_id']);
    }
    public function getCordinator()
    {
        return $this->hasOne(Managers::class, ['id' => 'cordinator_id']);
    }
}
