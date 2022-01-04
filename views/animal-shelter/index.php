<?php

use app\models\AnimalShelter\Animal;
use yii\bootstrap4\Html;
use yii\bootstrap4\Modal;
?>

<section class="content-header">

</section>

<section class="content">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>
                Animals
                <?= Html::a(
                    'Add animal',
                    ['#'],
                    [
                        'data-toggle' => 'modal',
                        'data-target' => '#new-animal',
                        'class' => 'btn btn-success btn-sm pull-right'
                    ]
                )?>
                <?= Html::a(
                    'Transfer an animal to a person',
                    ['#'],
                    [
                        'data-toggle' => 'modal',
                        'data-target' => '#exit-animal',
                        'class' => 'btn btn-danger btn-sm pull-right'
                    ]
                )?>
            </h4>
        </div>
        <div class="panel-body">
            <?= \yii\grid\GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    'id',
                    [
                        'label' => 'Name',
                        'attribute' => 'name',
                    ],
                    [
                        'label' => 'Age',
                        'attribute' => 'age',
                    ],
                    [
                        'label' => 'Type',
                        'attribute' => 'type',
                        'value' => function (Animal $animal) {
                            return Animal::getTypes()[$animal->type];
                        },
                        'filter' => Animal::getTypes(),
                    ],
                    [
                        'label' => 'Date create',
                        'attribute' => 'created_at',
                        'value' => 'created_at',
                        'format' => 'datetime',
                    ],
                ],
            ]); ?>
        </div>
    </div>
    <?php
    Modal::begin([
        'options' => [
            'id' => 'new-animal'
        ],
        'title' => '<h2>Add new Animal</h2>'
    ]);
    echo $this->render('_modal', [
        'model' => new Animal()
    ]);
    Modal::end(); ?>
    <?php
    Modal::begin([
        'options' => [
            'id' => 'exit-animal'
        ],
        'title' => '<h2>Transfer an animal to a person</h2>'
    ]);
    echo $this->render('_exit-animal-modal', [
        'types' => Animal::getTypes()
    ]);
    Modal::end(); ?>
</section>