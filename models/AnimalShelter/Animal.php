<?php

namespace app\models\AnimalShelter;

use Exception;
use yii\db\Query;

class Animal extends AnimalBaseModel
{
    public static function tableName(): string
    {
        return 'animals';
    }

    public function rules(): array
    {
        return [
            [[ 'name', 'type', 'age', ], 'required'],
            [ 'name', 'string', 'length' => [0, 255] ],
            [ 'type', 'integer'],
            [ 'age', 'integer', 'min' => 0, 'max' => '99' ],
        ];
    }

    public function saveOrThrow()
    {
        if(!$this->save()){
            throw new Exception($this->firstError);
        }
    }
}