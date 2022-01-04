<?php

namespace app\models\AnimalShelter\AnimalTypes;

use app\models\AnimalShelter\AnimalTypeInterface;

class Tortoise implements AnimalTypeInterface
{
    public static function getNumericType(): int
    {
        return self::TORTOISE_TYPE;
    }

    public static function getTypeName(): string
    {
        return 'Tortoise';
    }
}