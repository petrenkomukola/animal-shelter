<?php

namespace app\models\AnimalShelter\AnimalTypes;

use app\models\AnimalShelter\AnimalTypeInterface;

class Cat implements AnimalTypeInterface
{
    public static function getNumericType(): int
    {
        return self::CAT_TYPE;
    }

    public static function getTypeName(): string
    {
        return 'Cat';
    }
}