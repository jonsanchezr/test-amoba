<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Route;
use App\Models\UserPlan;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the specified Services.
     */
    public function index(Route $route, Request $request)
    {
        $services = Service::where('external_route_id', '-'.$route->id)
            ->whereBetween('timestamp', [$request->min_date.' 00:00:00', $request->max_date.' 23:59:59'])
            ->get();

        return response()->json($services->toArray());
    }

    /**
     * Display all Services.
     */
    public function allServices()
    {
        $services = Service::all();

        return response()->json($services->toArray());
    }
}
