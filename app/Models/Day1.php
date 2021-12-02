<?php

namespace App\Models;

use App\Helpers\Input;
use App\Models\Interfaces\DayInterface;
use Illuminate\Support\Collection;

class Day1 implements DayInterface
{
    public static function partOne(Collection $input): int
    {
        $input = Input::convertArrayToIntegers($input);
        $count = 0;
        $last = $input->first();

        $input->each(function ($number) use (&$last, &$count) {
            if ($number > $last) {
                $count++;
            }
            $last = $number;
        });
        return $count;
    }

    public static function partTwo(Collection $input): int
    {
        $input = Input::convertArrayToIntegers($input);
        $count = 0;
        $last = self::getSum($input, 0);

        for ($i = 0; $i < count($input) - 2; $i++) {
            $sum = self::getSum($input, $i);

            if ($sum > $last) {
                $count++;
            }
            $last = $sum;
        }
        return $count;
    }

    public static function testPartOne(): int
    {
        return 7;
    }

    public static function testPartTwo(): int
    {
        return 5;
    }

    private static function getSum(Collection $input, int $index): int
    {
        return $input[$index] + $input[$index + 1] + $input[$index + 2];
    }
}
