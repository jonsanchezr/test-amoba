<?php

namespace Database\Seeders;

use App\Models\RouteData;
use Illuminate\Database\Seeder;

class RouteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routeDatas = collect([
            [
                "route_id" => 1,
                "calendar_id" => 1,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2023-01-14 00:00:00",
                "date_finish" => "2023-12-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2023-01-14 17:04:10",
                "created_at" => "2023-01-14 17:04:10",
            ],
            [
                "route_id" => 2,
                "calendar_id" => 1,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2023-01-14 00:00:00",
                "date_finish" => "2023-12-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 0,
                "fri" => 1,
                "sat" => 0,
                "sun" => 1,
                "updated_at" => "2023-01-14 17:05:35",
                "created_at" => "2023-01-14 17:05:34",
            ],
            [
                "route_id" => 3,
                "calendar_id" => 1,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2023-01-14 00:00:00",
                "date_finish" => "2023-12-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 0,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 0,
                "updated_at" => "2023-01-14 17:09:17",
                "created_at" => "2023-01-14 17:09:17",
            ],
            [
                "route_id" => 4,
                "calendar_id" => 1,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2023-01-14 00:00:00",
                "date_finish" => "2023-12-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2023-01-14 17:09:45",
                "created_at" => "2023-01-14 17:09:44",
            ],
            [
                "route_id" => 5,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 1,
                "date_init" => "2023-01-14 00:00:00",
                "date_finish" => "2023-12-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2023-01-14 17:21:53",
                "created_at" => "2023-01-14 17:10:10",
            ],
            [
                "route_id" => 6,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 1,
                "date_init" => "2023-01-14 00:00:00",
                "date_finish" => "2023-12-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2023-01-14 17:22:05",
                "created_at" => "2023-01-14 17:20:36",
            ],
            [
                "route_id" => 7,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 1,
                "date_init" => "2023-01-14 00:00:00",
                "date_finish" => "2023-08-17 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-11-27 18:12:00",
                "created_at" => "2023-01-14 17:21:00",
            ],
            [
                "route_id" => 17,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 1,
                "date_init" => "2023-01-14 00:00:00",
                "date_finish" => "2023-12-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2023-01-14 17:22:25",
                "created_at" => "2023-01-14 17:21:29",
            ],
            [
                "route_id" => 19,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-04-10 00:00:00",
                "date_finish" => "2023-08-25 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 0,
                "sat" => 0,
                "sun" => 1,
                "updated_at" => "2021-05-01 21:04:47",
                "created_at" => "2021-04-10 15:47:22",
            ],
            [
                "route_id" => 20,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-05-02 00:00:00",
                "date_finish" => "2021-05-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-04-10 20:54:44",
                "created_at" => "2021-04-10 17:26:00",
            ],
            [
                "route_id" => 21,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-04-10 00:00:00",
                "date_finish" => "2021-12-22 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-04-10 17:34:33",
                "created_at" => "2021-04-10 17:34:33",
            ],
            [
                "route_id" => 22,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-04-14 00:00:00",
                "date_finish" => "2021-06-30 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-04-14 13:42:49",
                "created_at" => "2021-04-14 13:42:49",
            ],
            [
                "route_id" => 23,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-04-29 00:00:00",
                "date_finish" => "2021-08-26 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-04-20 17:55:21",
                "created_at" => "2021-04-14 15:04:50",
            ],
            [
                "route_id" => 24,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-05-04 00:00:00",
                "date_finish" => "2021-09-16 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 0,
                "updated_at" => "2021-05-04 17:03:14",
                "created_at" => "2021-04-15 00:49:25",
            ],
            [
                "route_id" => 25,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-04-23 00:00:00",
                "date_finish" => "2021-09-16 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-04-21 01:58:30",
                "created_at" => "2021-04-15 00:53:58",
            ],
            [
                "route_id" => 27,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 1,
                "date_init" => "2021-04-15 00:00:00",
                "date_finish" => "2021-08-26 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 0,
                "updated_at" => "2021-07-08 13:30:26",
                "created_at" => "2021-04-15 02:22:52",
            ],
            [
                "route_id" => 28,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-21 00:00:00",
                "date_finish" => "2022-07-14 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-10-21 21:42:25",
                "created_at" => "2021-04-28 16:01:08",
            ],
            [
                "route_id" => 29,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-05-03 00:00:00",
                "date_finish" => "2021-08-11 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-05-03 12:30:33",
                "created_at" => "2021-05-03 11:23:32",
            ],
            [
                "route_id" => 30,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-05-11 00:00:00",
                "date_finish" => "2021-11-18 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 0,
                "updated_at" => "2021-05-04 19:12:34",
                "created_at" => "2021-05-04 16:38:44",
            ],
            [
                "route_id" => 31,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-05-14 00:00:00",
                "date_finish" => "2021-09-16 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-06-30 20:28:20",
                "created_at" => "2021-05-13 13:44:13",
            ],
            [
                "route_id" => 49,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-07-20 00:00:00",
                "date_finish" => "2021-08-03 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-07-20 17:55:16",
                "created_at" => "2021-07-20 17:55:16",
            ],
            [
                "route_id" => 54,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-07-30 00:00:00",
                "date_finish" => "2021-10-22 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-07-30 17:05:17",
                "created_at" => "2021-07-30 17:05:17",
            ],
            [
                "route_id" => 56,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-08-02 00:00:00",
                "date_finish" => "2028-12-29 00:00:00",
                "mon" => 1,
                "tue" => 0,
                "wed" => 1,
                "thu" => 0,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-10-27 18:09:42",
                "created_at" => "2021-08-02 20:43:09",
            ],
            [
                "route_id" => 53,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-09-27 00:00:00",
                "date_finish" => "2022-08-12 00:00:00",
                "mon" => 0,
                "tue" => 0,
                "wed" => 0,
                "thu" => 0,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-10-26 12:43:47",
                "created_at" => "2021-09-27 21:36:28",
            ],
            [
                "route_id" => 60,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 1,
                "date_init" => "2021-09-27 00:00:00",
                "date_finish" => "2022-06-15 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-09-27 22:45:29",
                "created_at" => "2021-09-27 22:45:21",
            ],
            [
                "route_id" => 58,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-09-27 00:00:00",
                "date_finish" => "2022-01-07 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-09-27 22:47:58",
                "created_at" => "2021-09-27 22:47:58",
            ],
            [
                "route_id" => 59,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 1,
                "date_init" => "2021-10-26 00:00:00",
                "date_finish" => "2022-01-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-10-26 17:14:22",
                "created_at" => "2021-09-27 22:59:43",
            ],
            [
                "route_id" => 61,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-04 00:00:00",
                "date_finish" => "2023-01-11 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-10-04 22:02:39",
                "created_at" => "2021-10-04 22:02:39",
            ],
            [
                "route_id" => 62,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-04 00:00:00",
                "date_finish" => "2023-07-06 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 0,
                "updated_at" => "2021-10-04 22:04:38",
                "created_at" => "2021-10-04 22:04:38",
            ],
            [
                "route_id" => 63,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-04 00:00:00",
                "date_finish" => "2023-06-07 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-10-04 22:06:45",
                "created_at" => "2021-10-04 22:06:45",
            ],
            [
                "route_id" => 68,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-04 00:00:00",
                "date_finish" => "2023-06-24 00:00:00",
                "mon" => 1,
                "tue" => 0,
                "wed" => 1,
                "thu" => 0,
                "fri" => 1,
                "sat" => 1,
                "sun" => 0,
                "updated_at" => "2021-10-04 22:08:23",
                "created_at" => "2021-10-04 22:08:23",
            ],
            [
                "route_id" => 11,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-04 00:00:00",
                "date_finish" => "2023-03-17 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 0,
                "sat" => 0,
                "sun" => 1,
                "updated_at" => "2021-10-04 22:11:33",
                "created_at" => "2021-10-04 22:11:33",
            ],
            [
                "route_id" => 67,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-04 00:00:00",
                "date_finish" => "2023-08-15 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 0,
                "thu" => 1,
                "fri" => 0,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-10-04 22:12:49",
                "created_at" => "2021-10-04 22:12:49",
            ],
            [
                "route_id" => 10,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-04 00:00:00",
                "date_finish" => "2023-07-06 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 0,
                "fri" => 0,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-10-04 22:16:06",
                "created_at" => "2021-10-04 22:16:06",
            ],
            [
                "route_id" => 66,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-04 00:00:00",
                "date_finish" => "2022-04-07 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 0,
                "sat" => 0,
                "sun" => 1,
                "updated_at" => "2021-10-04 22:20:49",
                "created_at" => "2021-10-04 22:20:49",
            ],
            [
                "route_id" => 80,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-07-12 00:00:00",
                "mon" => 1,
                "tue" => 0,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-10-05 18:02:32",
                "created_at" => "2021-10-05 18:02:32",
            ],
            [
                "route_id" => 71,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-07-03 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-10-05 18:09:33",
                "created_at" => "2021-10-05 18:09:33",
            ],
            [
                "route_id" => 70,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-07-02 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-10-05 18:11:16",
                "created_at" => "2021-10-05 18:11:16",
            ],
            [
                "route_id" => 74,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-06-29 00:00:00",
                "mon" => 1,
                "tue" => 0,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-10-05 18:13:03",
                "created_at" => "2021-10-05 18:13:03",
            ],
            [
                "route_id" => 79,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-06-27 00:00:00",
                "mon" => 0,
                "tue" => 0,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-10-05 18:14:31",
                "created_at" => "2021-10-05 18:14:31",
            ],
            [
                "route_id" => 73,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-06-21 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 0,
                "updated_at" => "2021-10-05 18:16:24",
                "created_at" => "2021-10-05 18:16:24",
            ],
            [
                "route_id" => 78,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-06-28 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 0,
                "updated_at" => "2021-10-05 18:17:54",
                "created_at" => "2021-10-05 18:17:54",
            ],
            [
                "route_id" => 69,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-06-29 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-10-05 18:20:00",
                "created_at" => "2021-10-05 18:19:59",
            ],
            [
                "route_id" => 72,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-06-20 00:00:00",
                "mon" => 0,
                "tue" => 0,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-10-05 18:28:19",
                "created_at" => "2021-10-05 18:28:19",
            ],
            [
                "route_id" => 77,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-05 00:00:00",
                "date_finish" => "2023-06-21 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 0,
                "updated_at" => "2021-10-05 18:30:16",
                "created_at" => "2021-10-05 18:30:16",
            ],
            [
                "route_id" => 82,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-21 00:00:00",
                "date_finish" => "2022-07-14 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-10-21 21:35:13",
                "created_at" => "2021-10-21 21:35:13",
            ],
            [
                "route_id" => 84,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-10-30 00:00:00",
                "date_finish" => "2022-01-31 00:00:00",
                "mon" => 1,
                "tue" => 0,
                "wed" => 1,
                "thu" => 0,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-10-30 15:37:43",
                "created_at" => "2021-10-30 15:37:43",
            ],
            [
                "route_id" => 85,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-11-26 00:00:00",
                "date_finish" => "2021-12-31 00:00:00",
                "mon" => 1,
                "tue" => 0,
                "wed" => 1,
                "thu" => 0,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-11-26 14:53:10",
                "created_at" => "2021-11-26 14:53:10",
            ],
            [
                "route_id" => 85,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-11-26 00:00:00",
                "date_finish" => "2021-12-31 00:00:00",
                "mon" => 1,
                "tue" => 0,
                "wed" => 1,
                "thu" => 0,
                "fri" => 1,
                "sat" => 0,
                "sun" => 0,
                "updated_at" => "2021-11-26 20:25:14",
                "created_at" => "2021-11-26 20:13:56",
            ],
            [
                "route_id" => 84,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-11-27 00:00:00",
                "date_finish" => "2022-01-27 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-11-27 23:18:09",
                "created_at" => "2021-11-27 23:13:52",
            ],
            [
                "route_id" => 83,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-11-28 00:00:00",
                "date_finish" => "2021-12-28 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-11-28 21:21:57",
                "created_at" => "2021-11-28 21:21:57",
            ],
            [
                "route_id" => 82,
                "calendar_id" => 2,
                "vinculation_route" => null,
                "route_circular" => 0,
                "date_init" => "2021-12-01 00:00:00",
                "date_finish" => "2022-12-31 00:00:00",
                "mon" => 1,
                "tue" => 1,
                "wed" => 1,
                "thu" => 1,
                "fri" => 1,
                "sat" => 1,
                "sun" => 1,
                "updated_at" => "2021-12-01 20:00:06",
                "created_at" => "2021-12-01 20:00:06",
            ]
        ]);

        $routeDatas->each(fn ($routeData) => RouteData::create($routeData));
    }
}
