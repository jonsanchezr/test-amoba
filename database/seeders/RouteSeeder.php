<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = collect([
            [
                "external_id" => "-1",
                "invitation_code" => "X7MNYK",
                "title" => "Ruta - X7MNYK - Barcelona",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:48"
            ],
            [
                "external_id" => "-2",
                "invitation_code" => "7F4DPB",
                "title" => "Ruta - 7F4DPB - Barcelona",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:48"
            ],
            [
                "external_id" => "-3",
                "invitation_code" => "N9LYJD",
                "title" => "Ruta - N9LYJD - Barcelona",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:36:34"
            ],
            [
                "external_id" => "-4",
                "invitation_code" => "M9YBKE",
                "title" => "Ruta - M9YBKE - Barcelona",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:37:22"
            ],
            [
                "external_id" => "-5",
                "invitation_code" => "J0ELEF",
                "title" => "Ruta - J0ELEF - Barcelona",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:35:38"
            ],
            [
                "external_id" => null,
                "invitation_code" => "8K9DE8",
                "title" => "Ruta - 8K9DE8 - São Paulo",
                "start_timestamp" => "2023-01-20 09:34:22",
                "end_timestamp" => "2023-01-20 20:28:28"
            ],
            [
                "external_id" => null,
                "invitation_code" => "MBD3GM",
                "title" => "Ruta - MBD3GM - São Paulo",
                "start_timestamp" => "2023-01-20 09:34:22",
                "end_timestamp" => "2023-01-20 20:28:28"
            ],
            [
                "external_id" => null,
                "invitation_code" => "YFLXHA",
                "title" => "Ruta - YFLXHA - Brazil",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-21 10:29:37"
            ],
            [
                "external_id" => null,
                "invitation_code" => "HH7ZBJ",
                "title" => "Ruta - HH7ZBJ - São Paulo",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-21 02:09:35"
            ],
            [
                "external_id" => "-10",
                "invitation_code" => "DP0778",
                "title" => "Ruta - DP0778 - São Paulo",
                "start_timestamp" => "2023-01-20 17:32:57",
                "end_timestamp" => "2023-01-21 05:08:17"
            ],
            [
                "external_id" => "-11",
                "invitation_code" => "A3LJ8J",
                "title" => "Ruta - A3LJ8J - Portugal",
                "start_timestamp" => "2023-01-20 17:17:42",
                "end_timestamp" => "2023-01-20 19:06:57"
            ],
            [
                "external_id" => null,
                "invitation_code" => "NK80HL",
                "title" => "Ruta - NK80HL - Portugal",
                "start_timestamp" => "2023-01-20 17:41:09",
                "end_timestamp" => "2023-01-20 18:26:42"
            ],
            [
                "external_id" => null,
                "invitation_code" => "DZNAB0",
                "title" => "Ruta - DZNAB0 - Portugal",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 19:07:20"
            ],
            [
                "external_id" => null,
                "invitation_code" => "44YHXX",
                "title" => "Ruta - 44YHXX - Portugal",
                "start_timestamp" => "2023-01-20 17:20:32",
                "end_timestamp" => "2023-01-20 18:47:55"
            ],
            [
                "external_id" => "-15",
                "invitation_code" => "Z32KD4",
                "title" => "Ruta - Z32KD4 - Barcelona",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-16",
                "invitation_code" => "CFLMMF",
                "title" => "Ruta - CFLMMF - Barcelona",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-17",
                "invitation_code" => "ABH50B",
                "title" => "Ruta - ABH50B - Barcelona",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:36:28"
            ],
            [
                "external_id" => "-19",
                "invitation_code" => "ZAMX2B",
                "title" => "SUPERMAXIS - CORAL 1",
                "start_timestamp" => "2023-01-20 17:32:57",
                "end_timestamp" => "2023-01-21 05:07:57"
            ],
            [
                "external_id" => "-20",
                "invitation_code" => "X8X3PC",
                "title" => "LLANADA - COCOLLAR 1",
                "start_timestamp" => "2023-01-20 17:20:32",
                "end_timestamp" => "2023-01-20 18:47:32"
            ],
            [
                "external_id" => "-21",
                "invitation_code" => "DKN8B5",
                "title" => "LOJA - CASTEL FELLS 1",
                "start_timestamp" => "2023-01-20 17:20:32",
                "end_timestamp" => "2023-01-20 18:47:32"
            ],
            [
                "external_id" => "-22",
                "invitation_code" => "99093C",
                "title" => "MEGA TIENDA - CORAL 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 19:06:28"
            ],
            [
                "external_id" => "-23",
                "invitation_code" => "MEK4CC",
                "title" => "POLLO - POLLO2 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:36:28"
            ],
            [
                "external_id" => "-24",
                "invitation_code" => "DFBP5A",
                "title" => "FATIMA ROUTE 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:36:28"
            ],
            [
                "external_id" => "-25",
                "invitation_code" => "HAAX40",
                "title" => "FATIMA ROUTE 2 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:36:28"
            ],
            [
                "external_id" => "-26",
                "invitation_code" => "HNB4JE",
                "title" => "FATIMA ROUTE 2 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:36:28"
            ],
            [
                "external_id" => "-27",
                "invitation_code" => "J4PXZY",
                "title" => "RUTA VVVVV 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-28",
                "invitation_code" => "E26D6J",
                "title" => "Los Angeles - Unicasa (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-29",
                "invitation_code" => "34XD6B",
                "title" => "TEST-RURAS-03\/05\/2021 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-30",
                "invitation_code" => "JH7YYX",
                "title" => "TEST-RURAS-04\/05\/2021 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-31",
                "invitation_code" => "JPPP6B",
                "title" => "RUTA WEEKLY2 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-32",
                "invitation_code" => "X0EN4G",
                "title" => "RUTA WEEKLY 3 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-33",
                "invitation_code" => "9FA6PP",
                "title" => "RUTA WEEKLY 3 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-34",
                "invitation_code" => "2YNF3G",
                "title" => "RUTA WEEKLY 3 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-35",
                "invitation_code" => "FPZP07",
                "title" => "MARRIOT GUARENAS 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-36",
                "invitation_code" => "YH2FL8",
                "title" => "MARRIOT GUARENAS 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-37",
                "invitation_code" => "9DKGK6",
                "title" => "DANIEL B RUTA 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-38",
                "invitation_code" => "5ALXNL",
                "title" => "DANIEL B RUTA 2 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2021-09-20 18:42:28"
            ],
            [
                "external_id" => "-39",
                "invitation_code" => "ECH80E",
                "title" => "DANIEL B RUTA 3 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2021-09-20 18:42:28"
            ],
            [
                "external_id" => "-40",
                "invitation_code" => "AZBK2A",
                "title" => "RUTA VVVVVVVVVVV 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-41",
                "invitation_code" => "XXXEX2",
                "title" => "RUTA DE RUTAS 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-42",
                "invitation_code" => "APB2G0",
                "title" => "RRRRRRRRRRRRR(CLON) 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-43",
                "invitation_code" => "NCB5DZ",
                "title" => "RRRRRRRRRRRRR(CLON) 1 (CLON) 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-44",
                "invitation_code" => "A5KGAM",
                "title" => "MARRIOTT 123456 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-45",
                "invitation_code" => "5AG6J0",
                "title" => "MARRIOT XCXXXXX 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-46",
                "invitation_code" => "B4940Z",
                "title" => "MARRIOT XCXXXXX 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-47",
                "invitation_code" => "ZYXY7B",
                "title" => "MARRIOT XCXXXXX 1 (CLON) 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-48",
                "invitation_code" => "KK8BBB",
                "title" => "MARRIOT XCXXXXX 1 (CLON) 1 (CLON) 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-49",
                "invitation_code" => "H8BEG8",
                "title" => "MARRIOT XCXXXXX 1 (CLON) 1 (CLON) 1 (CLON) 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-50",
                "invitation_code" => "DJJCEM",
                "title" => "savoy 1 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-51",
                "invitation_code" => "9JNBJ3",
                "title" => "MARRIOT XCXXXXX 1 (CLON) 1 (CLON) 1 (CLON) 1 (CLON) 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-52",
                "invitation_code" => "E0J6JJ",
                "title" => "SAN LUIS - CHAIMAS 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-53",
                "invitation_code" => "FN342Z",
                "title" => "nueva ruta 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-54",
                "invitation_code" => "79ZNGZ",
                "title" => "EL BARQUITO 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-55",
                "invitation_code" => "5E4NGE",
                "title" => "EL BARQUITO 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-56",
                "invitation_code" => "KNLZZF",
                "title" => "test georgina 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-57",
                "invitation_code" => "K54ZGD",
                "title" => "Nueva route 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-58",
                "invitation_code" => "F42YGG",
                "title" => "EL BARQUITO 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-59",
                "invitation_code" => "XZ84NH",
                "title" => "EL BARQUITO 3 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-60",
                "invitation_code" => "AXMA3F",
                "title" => "Ejemplo nuevo 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-61",
                "invitation_code" => "KP0LKX",
                "title" => "LOJA - CASTEL FELLS 3 1",
                "start_timestamp" => "2023-01-20 17:20:32",
                "end_timestamp" => "2023-01-20 18:47:32"
            ],
            [
                "external_id" => "-62",
                "invitation_code" => "H7LGCG",
                "title" => "MEGA TIENDA - XD 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 19:06:28"
            ],
            [
                "external_id" => "-63",
                "invitation_code" => "X0C3Z2",
                "title" => "POLLO - POLLO LOCO 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:36:28"
            ],
            [
                "external_id" => "-66",
                "invitation_code" => "32FA4F",
                "title" => "Ruta - CFLMMF - Nuevo 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-67",
                "invitation_code" => "99GCE7",
                "title" => "Ruta - CFLMMF - 123 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-68",
                "invitation_code" => "PA6BHB",
                "title" => "Ruta - A3LJ8J - P 1",
                "start_timestamp" => "2023-01-20 17:17:42",
                "end_timestamp" => "2023-01-20 19:06:42"
            ],
            [
                "external_id" => "-69",
                "invitation_code" => "YN4LZM",
                "title" => "Nueva route Test 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-70",
                "invitation_code" => "F94GFK",
                "title" => "EL BARQUITO Final 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-71",
                "invitation_code" => "22HYKN",
                "title" => "DANIEL B RUTA COOL 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-72",
                "invitation_code" => "CD2J6J",
                "title" => "RUTA DE RUTAS EJEMPLO 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-73",
                "invitation_code" => "KGM3MX",
                "title" => "MANZANA 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-74",
                "invitation_code" => "AXG8MM",
                "title" => "FRESA 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:36:28"
            ],
            [
                "external_id" => "-77",
                "invitation_code" => "H78FEP",
                "title" => "SANDIA 1",
                "start_timestamp" => "2023-01-20 17:20:32",
                "end_timestamp" => "2023-01-20 18:47:32"
            ],
            [
                "external_id" => "-78",
                "invitation_code" => "PJP9P0",
                "title" => "MATTEO ROUTE 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:36:28"
            ],
            [
                "external_id" => "-79",
                "invitation_code" => "XX5367",
                "title" => "LLANADA - COCO 1",
                "start_timestamp" => "2023-01-20 17:20:32",
                "end_timestamp" => "2023-01-20 18:47:32"
            ],
            [
                "external_id" => "-80",
                "invitation_code" => "CB7KLK",
                "title" => "BATMAN 1",
                "start_timestamp" => "2023-01-20 17:41:09",
                "end_timestamp" => "2023-01-20 18:26:09"
            ],
            [
                "external_id" => "-81",
                "invitation_code" => "57G9LD",
                "title" => "RUTA COOL 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-82",
                "invitation_code" => "X0GJX2",
                "title" => "Los Angeles - Unicasa vuelta 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-83",
                "invitation_code" => "X0N68K",
                "title" => "LLANADA 1",
                "start_timestamp" => "2023-01-20 17:20:32",
                "end_timestamp" => "2023-01-20 18:47:32"
            ],
            [
                "external_id" => "-84",
                "invitation_code" => "GG9JXJ",
                "title" => "RUTA COOL 1 (CLON) 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-85",
                "invitation_code" => "PAPZ7Z",
                "title" => "calculo disponibilidad 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-86",
                "invitation_code" => "ZA02YC",
                "title" => "test disponibilidad 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-87",
                "invitation_code" => "X2XBJ4",
                "title" => "test disponibilidad 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-88",
                "invitation_code" => "ZL4MNC",
                "title" => "test services 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-89",
                "invitation_code" => "Y0D6DK",
                "title" => "capacidad 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ],
            [
                "external_id" => "-90",
                "invitation_code" => "D68GBJ",
                "title" => "test 1",
                "start_timestamp" => "2023-01-20 17:55:28",
                "end_timestamp" => "2023-01-20 18:42:28"
            ]
        ]);

        $routes->each(fn ($route) => Route::create($route));
    }
}
