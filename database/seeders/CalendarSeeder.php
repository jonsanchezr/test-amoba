<?php

namespace Database\Seeders;

use App\Models\Calendar;
use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calendars = collect([
            [
                "calendar_id" => null,
                "name" => "Catalunya",
            ],
            [
                "calendar_id" => null,
                "name" => "test calendar",
            ]
        ]);

        $calendars->each(fn ($calendar) => Calendar::create($calendar));
    }
}
