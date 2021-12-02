# Advent of Code using Laravel

A completely over the top project

## Requirements

- PHP 8.1
- Composer

No database connection is required.

## Installation

1. run `composer install`
2. copy `.env.example` to `.env`
3. might have to run `php artisan key:generate` to generate an application key

## Usage

### Adding solutions

1. create a class named `Day{day}.php` (for example `Day20.php`) in `app\Models\`, implementing the `DayInterface`
   interface.
2. add your implementations to the `partOne` and `partTwo` static methods

### Testing

1. create a file named `day{day}.txt` (for example `day20.txt`) in the `tests/input` directory
2. run `vendor/bin/phpunit tests/Feature/SolutionTest {day}` (for example vendor/bin/phpunit tests/Feature/SolutionTest
    20) to test that day's challenges

There's no decent checks on existence of the required classes/input files, but PHPUnit should alert you of any missing
files if that's the case

### Actual solutions

1. create a file named `day{day}.txt` (for example `day20.txt`) in the `resources/input` directory
2. run `php -S 127:0.0.1:3000`
3. open a browser and go to `localhost:3000/public/day/{day}` (for example `localhost:3000/public/day/20`) to view that
   day's actual solutions

There's better error handling when using a browser, although it doesn't tell you what you're missing.

Good luck!
