<?php

namespace App\Http\Controllers;

use App\Models\CalendarDaysDisabled;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CalendarDaysDisabledController extends Controller
{
    /**
     * Display the specified CalendarDaysDisabled.
     */
    public function index(Request $request)
    {
        $calendarDaysDisabled = CalendarDaysDisabled::where('calendar_id', 1)
            ->whereBetween('day', [$request->min_date.' 00:00:00', $request->max_date.' 23:59:59'])->get();

        return response()->json($calendarDaysDisabled->toArray());
    }
}
