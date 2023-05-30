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

Route::get('/', function () {
    return view('welcome');
});

/*
!middleware single line

Route::get('/profile{name, pass}', [QuestionFourController::class, 'loginWithUserRoutes'])->middleware([AuthMiddleware::class]);
Route::get('/settings{name, pass}', [QuestionFourController::class, 'loginWithSettinghRoutes'])->middleware([AuthMiddleware::class]);
Route::get('/login', [QuestionFourController::class, 'loginCorrectUser'])->middleware([AuthMiddleware::class]);
*/
