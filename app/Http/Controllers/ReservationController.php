<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Route;
use App\Models\UserPlan;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display the specified Reservations.
     */
    public function index(Route $route, Request $request)
    {
        $userPlan = UserPlan::where('user_id', auth()->user()->id)->get();
        $reservations = Reservation::where('route_id', $route->id)
            ->where('user_plan_id', $userPlan[0]->id)
            ->whereBetween('reservation_start', [$request->min_date.' 00:00:00', $request->max_date.' 23:59:59'])
            ->get();

        return response()->json($reservations->toArray());
    }
}
