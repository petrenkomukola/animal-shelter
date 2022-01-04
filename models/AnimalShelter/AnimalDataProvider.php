<?php

namespace app\models\AnimalShelter;

use yii\data\ActiveDataProvider;

class AnimalDataProvider extends Animal
{
    public function rules():array {
        return [
            [ 'type', 'integer'],
        ];
    }

    public function search($params)
    {
        $query = parent::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ],
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['=', 'type', $this->type]);

        return $dataProvider;
    }
}