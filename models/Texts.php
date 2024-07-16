<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "texts".
 *
 * @property int $id
 * @property string|null $slug
 * @property string|null $text_hy
 * @property string|null $text_ru
 * @property string|null $text_en
 * @property string|null $page
 */
class Texts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'texts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'text_hy', 'text_ru', 'text_en','page'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'Slug',
            'text_hy' => 'Text Hy',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
        ];
    }
}
