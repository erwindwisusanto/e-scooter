<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function handleVisit(Request $request)
    {
        $count = 1;
        $today = Carbon::today();

        if ($request->has('button') && $request->has('scooter')) {

            $button = $request->button;
            $scooter = $request->scooter;

            $visit = Visit::whereDate('date', $today)
                ->where('button', $button)
                ->where('scooter', $scooter)
                ->first();

            if ($visit) {
                $visit->button_clicked += $count;
            } else {
                $visit = new Visit();

                $visit->button_clicked = $count;
                $visit->date = $today;
                $visit->button = $button;
                $visit->scooter = $scooter;
            }

            $visit->save();

            return response()->json(['message' => 'Button click recorded successfully'], 200);
        } else {
            $visit = Visit::whereDate('date', $today)->first();

            if ($visit) {
                $visit->landing += $count;
            } else {
                $visit = new Visit();

                $visit->landing = $count;
                $visit->date = $today;
            }

            $visit->save();

            return response()->json(['message' => 'Visit recorded successfully'], 200);
        }
    }
}
