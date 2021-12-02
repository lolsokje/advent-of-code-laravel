<?php

namespace App\Models\Interfaces;

use Illuminate\Support\Collection;

interface DayInterface
{
    // implementation for part one
    public static function partOne(Collection $input): int;

    // implementation for part two
    public static function partTwo(Collection $input): int;

    // expected result for the first example (using AoC's provided example input)
    public static function testPartOne(): int;

    // expected result for the second example (using AoC's provided example input)
    public static function testPartTwo(): int;
}
