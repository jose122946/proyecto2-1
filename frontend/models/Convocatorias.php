<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "convocatorias".
 *
 * @property integer $id_Convocatoria
 * @property string $url_convocatoria
 */
class Convocatorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'convocatorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url_convocatoria'], 'required'],
            [['url_convocatoria'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Convocatoria' => 'Id  Convocatoria',
            'url_convocatoria' => 'Url Convocatoria',
        ];
    }
}
