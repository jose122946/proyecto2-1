<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "avisos".
 *
 * @property integer $id_Aviso
 * @property string $aviso
 */
class Avisos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avisos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aviso'], 'required'],
            [['aviso'], 'string', 'max' => 400]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Aviso' => 'Id  Aviso',
            'aviso' => 'Aviso',
        ];
    }
}
