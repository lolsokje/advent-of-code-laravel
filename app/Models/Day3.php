<?php

namespace App\Models;

use Illuminate\Support\Collection;

class Day3 implements Interfaces\DayInterface
{

    public static function partOne(Collection $input): int
    {
        $length = strlen($input->first());
        $count = count($input);
        $gamma = '';
        $epsilon = '';

        for ($position = 0; $position < $length; $position++) {
            $chars = $input->map(fn($line) => $line[$position]);
            $valueCount = array_count_values($chars->toArray());

            $gamma .= $valueCount[1] > $count / 2 ? '1' : '0';
            $epsilon .= $valueCount[0] > $count / 2 ? '1' : '0';
        }

        return bindec($gamma) * bindec($epsilon);
    }

    public static function partTwo(Collection $input): int
    {
        $oxygen = self::getOutput($input, 'most');
        $co2 = self::getOutput($input, 'least');

        return bindec($oxygen) * bindec($co2);
    }

    public static function testPartOne(): int
    {
        return 198;
    }

    public static function testPartTwo(): int
    {
        return 230;
    }

    private static function getOutput(Collection $input, string $mode): string
    {
        $local = '';
        $filtered = $input;
        $length = strlen($input->first());
        $count = count($filtered);

        for ($position = 0; $position < $length; $position++) {
            $chars = $filtered->map(fn($line) => $line[$position]);
            $valueCount = array_count_values($chars->toArray());

            if ($mode === 'most') {
                $local .= $valueCount['1'] >= $count / 2 ? '1' : '0';
            } else {
                $local .= $valueCount['0'] <= $count / 2 ? '0' : '1';
            }

            $filtered = $filtered->filter(fn($line) => str_starts_with($line, $local));
            $count = count($filtered);

            if ($filtered->count() === 1) {
                $local = $filtered->first();
                break;
            }
        }
        return $local;
    }
}

