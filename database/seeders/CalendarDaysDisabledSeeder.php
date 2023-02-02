<?php

namespace Database\Seeders;

use App\Models\CalendarDaysDisabled;
use Illuminate\Database\Seeder;

class CalendarDaysDisabledSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calendarDaysDisableds = collect([
            [
                "calendar_id" => 1,
                "day" => "2023-02-07 00:00:00",
                "enabled" => 1
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-02-21 00:00:00",
                "enabled" => 1
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-02-11 00:00:00",
                "enabled" => 1
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-02-27 00:00:00",
                "enabled" => 1
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-12 00:00:00",
                "enabled" => 1
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-03 00:00:00",
                "enabled" => 1
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-20 00:00:00",
                "enabled" => 1
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-01-01 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-01-06 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-04-10 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-04-13 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-02-01 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-06-24 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-08-15 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-09-11 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-10-12 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-12-08 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-12-06 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-12-25 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2020-12-26 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-01-01 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-01-06 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-04-27 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-04-28 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-06-11 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-06-12 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-23 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-22 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-24 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-25 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-26 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-28 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-02-25 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-10-29 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 2,
                "day" => "2023-10-28 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-10-28 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-11-30 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-11-26 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-11-28 00:00:00",
                "enabled" => 1,
            ],
            [
                "calendar_id" => 1,
                "day" => "2023-12-15 00:00:00",
                "enabled" => 1,
            ]
        ]);

        $calendarDaysDisableds->each(fn ($calendarDaysDisabled) => CalendarDaysDisabled::create($calendarDaysDisabled));
    }
}
