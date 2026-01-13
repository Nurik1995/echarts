<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\json_encode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tankerTime = DB::select("SELECT ROUND(AVG(((ti_calendar_day - ti_fix_day) / ti_calendar_day) * 100)) AS tanker_time_commercial_utility_sum,
       SUM(ti_income_fact) AS tanker_time_income_fact_sum,
       (SUM(ti_income_fact) - SUM(ti_income_plan)) AS tanker_time_income_difference
FROM tanker_indicator
WHERE ti_type = 'time';");

    $tankerSpot = DB::select("SELECT ROUND(AVG(((ti_calendar_day - (ti_fix_day + ti_reserve_day + ti_guaranty_day + ti_work_wait_day + ti_weather_day)) / ti_calendar_day) * 100)) AS tanker_spot_commercial_utility_sum,
       ROUND(AVG(((ti_calendar_day - ti_fix_day) / ti_calendar_day) * 100)) AS tanker_spot_operation_utility_sum,
		 SUM(ti_equality_price) AS tanker_spot_equality_price_sum,
       (SUM(ti_equality_price) - SUM(ti_equality_market_price)) AS tanker_spot_equality_difference
FROM tanker_indicator
WHERE ti_type = 'spot';");

    $dryCargoTime = DB::select("SELECT ROUND(AVG(((dci_calendar_day - dci_fix_day) / dci_calendar_day) * 100)) AS dry_cargo_time_commercial_utility_sum,
       SUM(dci_income_fact) AS dry_cargo_time_income_fact_sum,
       (SUM(dci_income_fact) - SUM(dci_income_plan)) AS dry_cargo_time_income_difference
FROM dry_cargo_indicator
WHERE dci_type = 'time';");

    $dryCargoSpot = DB::select("SELECT ROUND(AVG(((dci_calendar_day - (dci_fix_day + dci_reserve_day + dci_guaranty_day + dci_work_wait_day + dci_weather_day)) / dci_calendar_day) * 100)) AS dry_cargo_spot_commercial_utility_sum,
       ROUND(AVG(((dci_calendar_day - dci_fix_day) / dci_calendar_day) * 100)) AS dry_cargo_spot_operation_utility_sum,
		 SUM(dci_equality_price) AS dry_cargo_spot_equality_price_sum,
       (SUM(dci_equality_price) - SUM(dci_equality_market_price)) AS dry_cargo_spot_equality_difference
FROM dry_cargo_indicator
WHERE dci_type = 'spot';");


    $xdndTime = DB::select("SELECT ROUND(AVG(((xi_calendar_day - xi_fix_day) / xi_calendar_day) * 100)) AS xdnd_time_commercial_utility_sum,
       SUM(xi_income_fact) AS xdnd_time_income_fact_sum,
       (SUM(xi_income_fact) - SUM(xi_income_plan)) AS xdnd_time_income_difference
FROM xdnd_indicator
WHERE xi_type = 'time';");

    $ascoTime = DB::select("SELECT ROUND(AVG(((ai_calendar_day - ai_fix_day) / ai_calendar_day) * 100)) AS asco_time_commercial_utility_sum,
       SUM(ai_income_fact) AS asco_time_income_fact_sum,
       (SUM(ai_income_fact) - SUM(ai_income_plan)) AS asco_time_income_difference
FROM asco_indicator
WHERE ai_type = 'time';");


    $tankerTime = json_decode(json_encode($tankerTime), true);
    $tankerSpot = json_decode(json_encode($tankerSpot), true);
    $dryCargoTime = json_decode(json_encode($dryCargoTime), true);
    $dryCargoSpot = json_decode(json_encode($dryCargoSpot), true);
    $xdndTime = json_decode(json_encode($xdndTime), true);
    $ascoTime = json_decode(json_encode($ascoTime), true);

    // $tankerSpot = json_encode($tankerSpot);

    // dd($tankerSpot);

    // return view('welcome', ['val' => $val]);
    return view('welcome', compact('tankerTime', 'dryCargoTime', 'dryCargoSpot', 'tankerSpot', 'xdndTime', 'ascoTime'));
});

Route::get('/bar', function () {
    return view('bar');
});
