<?php

namespace app\controllers;

use app\models\AnimalShelter\Animal;
use app\models\AnimalShelter\AnimalDataProvider;
use yii\web\Controller;

class AnimalShelterController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $params = \Yii::$app->request->queryParams;

        $searchModel = new AnimalDataProvider();
        $dataProvider = $searchModel->search($params);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);

    }

    public function actionAdd()
    {
        $animal = new Animal();

        $request = \Yii::$app->request;

        $animal->load($request->bodyParams);

        $animal->save();

        return $this->redirect("/animal-shelter/index");
    }

    public function actionExit()
    {
        $type = \Yii::$app->request->post('type');
        if ($type) {
            $animal = Animal::find()->andWhere(['=', 'type', $type])->orderBy('created_at ASC')->one();
        } else {
            $animal = Animal::find()->orderBy('created_at ASC')->one();
        }
        if ($animal) {
            $animal->delete();
        }

        return $this->redirect("/animal-shelter/index");
    }
}