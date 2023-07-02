<?php

use App\Http\Controllers\demoController;
use App\Http\Controllers\laravelQueryBuilderDoc;
use App\Http\Controllers\whereClauseController;
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

Route::get('/', [demoController::class, 'demoAction']);
Route::get('/first', [demoController::class, 'demoActionFirst']);
Route::get('/view', [demoController::class, 'demoActionView']);
Route::get('/view2', [demoController::class, 'demoActionView2']);
Route::get('/view3', [demoController::class, 'demoActionView3']);
Route::get('/view4', [demoController::class, 'demoActionView4']);
Route::get('/view5', [demoController::class, 'demoActionView5']);

//!Aggregates
Route::get('/count', [demoController::class, 'aggreGatesCount']);
Route::get('/max', [demoController::class, 'aggreGatesMax']);
Route::get('/min', [demoController::class, 'aggreGatesMin']);
Route::get('/avg', [demoController::class, 'aggreGatesAvg']);
Route::get('/sum', [demoController::class, 'aggreGatesSum']);

//!Select Statements
Route::get('/select', [demoController::class, 'selectStatementSelect']);
Route::get('/distinct', [demoController::class, 'selectStatementDistinct']);
Route::get('/addSelect', [demoController::class, 'selectStatementAddSelect']);

//!Raw Methods


//!Joins

Route::get('/innerjoin', [demoController::class, 'innerJoin']);
Route::get('/innerjoin2', [demoController::class, 'innerJoin2']);
Route::get('/leftjoin', [demoController::class, 'leftJoin']);
Route::get('/rightjoin', [demoController::class, 'rightJoin']);
Route::get('/crossjoin', [demoController::class, 'crossJoin']);
//%Advanced Join Clauses
Route::get('/advancejoin', [demoController::class, 'advanceJoin']);


//@ Subquery Joins

Route::get('/subqueryjoin', [demoController::class, 'subQueryJoin']);


////Unions--The query builder also provides a convenient method to "union" two or more queries together. For example, you may create an initial query and use the union method to union it with more queries:
Route::get('/union', [demoController::class, 'unionJoin']);

//*Basic Where Clauses
Route::get('/where', [whereClauseController::class, 'whereClauseGreaterThen']);
Route::get('/where1', [whereClauseController::class, 'whereClauseLessThen']);
Route::get('/where2', [whereClauseController::class, 'whereClauseNotEqual']);
Route::get('/where3', [whereClauseController::class, 'whereClauseEqual']);
Route::get('/where4', [whereClauseController::class, 'whereClauseGreaterEqual']);
Route::get('/where5', [whereClauseController::class, 'whereClauseLessEqual']);
Route::get('/where6', [whereClauseController::class, 'whereClauseLike']);
Route::get('/where7', [whereClauseController::class, 'whereClauseNotLike']);
Route::get('/where8', [whereClauseController::class, 'whereClauseIn']);
Route::get('/where9', [whereClauseController::class, 'whereClauseNotIn']);

