<?php

namespace App\Helpers;

use App\Models\Interfaces\DayInterface;

class Model
{
    public static function getModel(int $day): DayInterface
    {
        $className = "Day{$day}";
        /** @var DayInterface $model */
        $model = "App\\Models\\" . $className;
        return new $model;
    }
}
