<?php

namespace App\Models;

use App\Models\Interfaces\DayInterface;
use Illuminate\Support\Collection;

// Scuffed solutions only
class Day2 implements DayInterface
{
    public static function partOne(Collection $input): int
    {
        $horizontal = 0;
        $vertical = 0;

        $calls = [
            'forward' => fn($amount, &$horizontal, &$vertical) => $horizontal += $amount,
            'down' => fn($amount, &$horizontal, &$vertical) => $vertical += $amount,
            'up' => fn($amount, &$horizontal, &$vertical) => $vertical -= $amount,
        ];

        foreach ($input as $command) {
            [$direction, $amount] = explode(' ', $command);
            $calls[$direction]($amount, $horizontal, $vertical);
        }

        return $vertical * $horizontal;
    }

    public static function partTwo(Collection $input): int
    {
        $horizontal = 0;
        $aim = 0;
        $depth = 0;

        $calls = [
            'forward' => function ($amount, &$horizontal, &$aim, &$depth) {
                $horizontal += $amount;
                $depth += $aim * $amount;
            },
            'down' => fn($amount, &$horizontal, &$aim, &$depth) => $aim += $amount,
            'up' => fn($amount, &$horizontal, &$aim, &$depth) => $aim -= $amount,
        ];

        foreach ($input as $command) {
            [$direction, $amount] = explode(' ', $command);
            $calls[$direction]($amount, $horizontal, $aim, $depth);
        }

        return $horizontal * $depth;
    }

    public static function testPartOne(): int
    {
        return 150;
    }

    public static function testPartTwo(): int
    {
        return 900;
    }
}
