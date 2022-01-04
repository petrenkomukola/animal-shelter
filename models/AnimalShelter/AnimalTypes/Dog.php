<?php

namespace app\models\AnimalShelter\AnimalTypes;

use app\models\AnimalShelter\AnimalTypeInterface;

class Dog implements AnimalTypeInterface
{
    public static function getNumericType(): int
    {
        return self::DOG_TYPE;
    }

    public static function getTypeName(): string
    {
        return 'Dog';
    }
}