<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            UserPlanSeeder::class,
            CalendarSeeder::class,
            CalendarDaysDisabledSeeder::class,
            RouteSeeder::class,
            RouteDataSeeder::class,
            ReservationSeeder::class,
            ServiceSeeder::class
        ]);
    }
}
