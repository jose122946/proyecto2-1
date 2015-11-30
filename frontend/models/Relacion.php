<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relacion".
 *
 * @property integer $id_Relacion
 * @property integer $id_Usuario
 * @property integer $id_Proyecto
 */
class Relacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Usuario', 'id_Proyecto'], 'required'],
            [['id_Usuario', 'id_Proyecto'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Relacion' => 'Id  Relacion',
            'id_Usuario' => 'Id  Usuario',
            'id_Proyecto' => 'Id  Proyecto',
        ];
    }
}
