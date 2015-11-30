<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proyecto".
 *
 * @property integer $id_Proyecto
 * @property string $nombre_proyecto
 * @property string $nombre_corto
 * @property string $descripcion
 * @property string $area
 * @property integer $id_Anteproyecto
 * @property integer $id_Canvas
 * @property integer $id_canvas2
 * @property integer $id_Negocio
 * @property integer $id_Financiero
 * @property integer $id_Legales
 * @property integer $id_Intelectual
 * @property string $resultado
 * @property string $objetivo
 * @property integer $modulo
 * @property integer $id_Asesor
 */
class Proyecto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proyecto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_proyecto', 'nombre_corto', 'descripcion', 'area', 'resultado', 'objetivo', 'modulo'], 'required'],
            [['id_Anteproyecto', 'id_Canvas', 'id_canvas2', 'id_Negocio', 'id_Financiero', 'id_Legales', 'id_Intelectual', 'modulo', 'id_Asesor'], 'integer'],
            [['nombre_proyecto', 'nombre_corto', 'area'], 'string', 'max' => 35],
            [['descripcion'], 'string', 'max' => 300],
            [['resultado'], 'string', 'max' => 200],
            [['objetivo'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Proyecto' => 'Id  Proyecto',
            'nombre_proyecto' => 'Nombre Proyecto',
            'nombre_corto' => 'Nombre Corto',
            'descripcion' => 'Descripcion',
            'area' => 'Area',
            'id_Anteproyecto' => 'Id  Anteproyecto',
            'id_Canvas' => 'Id  Canvas',
            'id_canvas2' => 'Id Canvas2',
            'id_Negocio' => 'Id  Negocio',
            'id_Financiero' => 'Id  Financiero',
            'id_Legales' => 'Id  Legales',
            'id_Intelectual' => 'Id  Intelectual',
            'resultado' => 'Resultado',
            'objetivo' => 'Objetivo',
            'modulo' => 'Modulo',
            'id_Asesor' => 'Id  Asesor',
        ];
    }
}
