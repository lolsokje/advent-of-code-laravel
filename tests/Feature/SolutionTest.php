<?php

namespace Tests\Feature;

use App\Helpers\Input;
use App\Helpers\Model;
use App\Models\Interfaces\DayInterface;
use Illuminate\Support\Collection;
use Tests\TestCase;

class SolutionTest extends TestCase
{
    private ?DayInterface $model = null;
    private ?Collection $input = null;

    /** @test */
    public function it_can_run_part_one()
    {
        $this->assertEquals($this->model::partOne($this->input), $this->model::testPartOne());
    }

    /** @test */
    public function it_can_run_part_two()
    {
        $this->assertEquals($this->model::partTwo($this->input), $this->model::testPartTwo());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->getDayModel($this->getDay());
        $this->getInput($this->getDay());
    }

    private function getDay(): int
    {
        global $argv;

        return (int)$argv[array_key_last($argv)];
    }

    private function getDayModel(int $day): void
    {
        $this->model = Model::getModel($day);
    }

    private function getInput(int $day): void
    {
        $this->input = Input::getTestInput($day);
    }
}
