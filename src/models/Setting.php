<?php

namespace uraankhayayaal\setting\models;

use Yii;
use yii\behaviors\TimestampBehavior;

class Setting extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'setting';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function rules()
    {
        return [
            [['title', 'value'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'value'], 'string', 'max' => 255],
            [['title'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Идентификатор',
            'title' => 'Название',
            'value' => 'Значение',
            'status' => 'Статус',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
        ];
    }

    public static function valueOf($key)
    {
        return self::find()->where(['key' => $key])->one()->value;
    }
}
