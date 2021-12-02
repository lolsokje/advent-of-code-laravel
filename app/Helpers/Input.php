<?php

namespace App\Helpers;

use Illuminate\Support\Collection;

class Input
{
    public static function getInput(int $day): Collection
    {
        return self::handle("resources/input/day{$day}.txt");
    }

    public static function getTestInput(int $day): Collection
    {
        return self::handle("tests/input/day{$day}.txt");
    }

    public static function convertArrayToIntegers(Collection $collection): Collection
    {
        return $collection->map(fn($value) => (int)$value);
    }

    private static function handle(string $path): Collection
    {
        $content = self::getInputFromPath($path);
        return collect(array_filter(self::getInputAsArray($content)));
    }

    private static function getInputFromPath(string $path): string
    {
        return file_get_contents(__DIR__ . "/../../" . $path);
    }

    private static function getInputAsArray(string $content): array
    {
        return explode(PHP_EOL, $content);
    }
}
