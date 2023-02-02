<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display all Users.
     */
    public function allUsers()
    {
        $users = User::all();

        return response()->json($users->toArray());
    }
}
