<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mensajes".
 *
 * @property integer $id_Mensaje
 * @property integer $id_Emisor
 * @property integer $id_Receptor
 * @property string $mensaje
 */
class Mensajes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mensajes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Emisor', 'id_Receptor', 'mensaje'], 'required'],
            [['id_Emisor', 'id_Receptor'], 'integer'],
            [['mensaje'], 'string', 'max' => 400]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Mensaje' => 'Id  Mensaje',
            'id_Emisor' => 'Id  Emisor',
            'id_Receptor' => 'Id  Receptor',
            'mensaje' => 'Mensaje',
        ];
    }
}
