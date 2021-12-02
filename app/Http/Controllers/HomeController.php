<?php

namespace App\Http\Controllers;

use App\Helpers\Input;
use App\Helpers\Model;
use Error;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function day(int $day): Renderable|RedirectResponse
    {
        try {
            $input = Input::getInput($day);
        } catch (Exception) {
            return redirect(route('error'))
                ->with('error', "something went wrong fetching day {$day}'s input")
                ->with('day', $day);
        }

        try {
            $model = Model::getModel($day);
        } catch (Error) {
            return redirect(route('error'))
                ->with('error', "something went wrong finding day {$day}'s solution")
                ->with('day', $day);
        }

        return view('day', [
            'partOne' => $model::partOne($input),
            'partTwo' => $model::partTwo($input),
            'day' => $day,
        ]);
    }

    public function error(): Renderable
    {
        return view('error', [
            'error' => session('error'),
            'day' => session('day'),
        ]);
    }
}
