<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
}); */


/* Route::get('/', function () {
    $numbers = [];

    for ($i = 0; $i < 8; $i++) {
        $randomNumber = mt_rand(750, 930) / 100;
        $formattedNumber = number_format($randomNumber, 2);
        $numbers[] = $formattedNumber;
    }
    print_r($numbers);
}); */

Route::get('/', function () {
    $numbers = [];
    $total = 0;

    for ($i = 0; $i < 8; $i++) {
        $randomNumber = mt_rand(750, 930) / 100;
        $formattedNumber = number_format($randomNumber, 2);
        $numbers[] = $formattedNumber;
        $total += $formattedNumber;
    }

    $average = $total / count($numbers);
    dump($numbers);
    return ('Average: ' . number_format($average, 2));


});

Route::get('/n', function () {
    $desiredAverage = 8.9;
    $lowerLimit = 7.50;
    $upperLimit = 9.20;

    $numbers = [];
    $total = 0;

    // Generate 8 random numbers
    for ($i = 0; $i < 7; $i++) {
        $randomNumber = mt_rand($lowerLimit * 100, $upperLimit * 100) / 100;
        $numbers[] = $randomNumber;
        $total += $randomNumber;
    }

    // Calculate the eighth number to achieve the desired average
    $eighthNumber = ($desiredAverage * 8) - $total;
    $numbers[] = $eighthNumber;

    $average = array_sum($numbers) / count($numbers);

    // Shuffle the numbers
    shuffle($numbers);
    dump($numbers);
    dump('Average: ' . $average);



});
