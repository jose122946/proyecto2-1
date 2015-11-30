<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carreras".
 *
 * @property integer $id_Carrera
 * @property string $nombre_carrera
 */
class Carreras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carreras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_carrera'], 'required'],
            [['nombre_carrera'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Carrera' => 'Id  Carrera',
            'nombre_carrera' => 'Nombre Carrera',
        ];
    }
}
