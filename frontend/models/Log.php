<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%log}}".
 *
 * @property integer $id
 * @property string $model
 * @property string $message
 * @property string $date
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['model', 'message'], 'required'],
            [['message'], 'string'],
            [['date'], 'safe'],
            [['model'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'message' => 'Message',
            'date' => 'Date',
        ];
    }

    public function saveLog($message = "", $call_model = "")
    {
        $this->model = $call_model;
        $this->message = $message;
        $this->save();
    }
}
