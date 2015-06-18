<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%proxies}}".
 *
 * @property integer $id
 * @property string $ip
 * @property string $country
 * @property string $city
 * @property integer $is_show
 * @property string $for_city
 */
class Proxies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%proxies}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip', 'country', 'city', 'for_city'], 'required'],
            [['is_show'], 'integer'],
            [['ip', 'country', 'city', 'for_city'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID прокси',
            'ip' => 'IP-адрес',
            'country' => 'Страна',
            'city' => 'Город',
            'is_show' => 'Использовать прокси',
            'for_city' => 'Используется для города',
        ];
    }
}
