<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Database\Eloquent\Builder;

class RouteController extends Controller
{
    /**
     * Display the specified Routes.
     */
    public function index()
    {
        $routes = Route::with(['routeData'])->whereHas('routeData', fn (Builder $builder) => $builder->where('calendar_id', 1))->get();

        return response()->json($routes->toArray());
    }
}
