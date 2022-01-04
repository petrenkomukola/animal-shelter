<?php

namespace app\models\AnimalShelter;

interface AnimalTypeInterface{
    const TORTOISE_TYPE = 1;
    const DOG_TYPE = 2;
    const CAT_TYPE = 3;

    public static function getNumericType(): int ;
    public static function getTypeName(): string ;
}