<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property integer $id_Plan
 * @property integer $id_Carrera
 * @property string $plan_nombre
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Carrera', 'plan_nombre'], 'required'],
            [['id_Carrera'], 'integer'],
            [['plan_nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Plan' => 'Id  Plan',
            'id_Carrera' => 'Id  Carrera',
            'plan_nombre' => 'Plan Nombre',
        ];
    }
}
