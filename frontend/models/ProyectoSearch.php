<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Proyecto;

/**
 * ProyectoSearch represents the model behind the search form about `app\models\Proyecto`.
 */
class ProyectoSearch extends Proyecto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Proyecto', 'id_Anteproyecto', 'id_Canvas', 'id_canvas2', 'id_Negocio', 'id_Financiero', 'id_Legales', 'id_Intelectual', 'modulo', 'id_Asesor'], 'integer'],
            [['nombre_proyecto', 'nombre_corto', 'descripcion', 'area', 'resultado', 'objetivo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Proyecto::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_Proyecto' => $this->id_Proyecto,
            'id_Anteproyecto' => $this->id_Anteproyecto,
            'id_Canvas' => $this->id_Canvas,
            'id_canvas2' => $this->id_canvas2,
            'id_Negocio' => $this->id_Negocio,
            'id_Financiero' => $this->id_Financiero,
            'id_Legales' => $this->id_Legales,
            'id_Intelectual' => $this->id_Intelectual,
            'modulo' => $this->modulo,
            'id_Asesor' => $this->id_Asesor,
        ]);

        $query->andFilterWhere(['like', 'nombre_proyecto', $this->nombre_proyecto])
            ->andFilterWhere(['like', 'nombre_corto', $this->nombre_corto])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'resultado', $this->resultado])
            ->andFilterWhere(['like', 'objetivo', $this->objetivo]);

        return $dataProvider;
    }
}
