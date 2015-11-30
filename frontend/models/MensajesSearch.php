<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mensajes;

/**
 * MensajesSearch represents the model behind the search form about `app\models\Mensajes`.
 */
class MensajesSearch extends Mensajes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_Mensaje', 'id_Emisor', 'id_Receptor'], 'integer'],
            [['mensaje'], 'safe'],
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
        $query = Mensajes::find();

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
            'id_Mensaje' => $this->id_Mensaje,
            'id_Emisor' => $this->id_Emisor,
            'id_Receptor' => $this->id_Receptor,
        ]);

        $query->andFilterWhere(['like', 'mensaje', $this->mensaje]);

        return $dataProvider;
    }
}
