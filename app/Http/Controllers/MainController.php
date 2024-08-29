<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function visitCounter()
    {
        $count = 1;

        $today = Carbon::today();
        $visit = Visit::whereDate('date', $today)->first();

        if ($visit) {
            $visit->counter += $count;
        } else {
            $visit = new Visit();

            $visit->counter = $count;
            $visit->date = $today;
        }

        $visit->save();

        return response()->json(['message' => 'valid campaign'], 200);
    }
}
