<?php

namespace app\models\AnimalShelter;

use app\models\AnimalShelter\AnimalTypes\Cat;
use app\models\AnimalShelter\AnimalTypes\Dog;
use app\models\AnimalShelter\AnimalTypes\Tortoise;
use yii\db\ActiveRecord;

abstract class AnimalBaseModel extends ActiveRecord{

    public function getTypeOfAnimal(int $numericType): string
    {
        switch ($numericType) {
            case Tortoise::getNumericType():
                return Tortoise::getTypeName();
            case Cat::getNumericType():
                return Cat::getTypeName();
            case Dog::getNumericType():
                return Dog::getTypeName();
            default:
                return "Not selected type";
        }
    }

    public static function getTypes(): array
    {
        return [
            '' => 'Not selected type',
            Tortoise::getNumericType() => Tortoise::getTypeName(),
            Cat::getNumericType() => Cat::getTypeName(),
            Dog::getNumericType() => Dog::getTypeName()
        ];
    }
}