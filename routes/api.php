<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::any('znajzel-exercise-1', 'Exercise1');
Route::any('fe4-znajzel-ex2', 'Exercise2');
Route::any('znajzel-exercise-3', 'Exercise3@index');
Route::any('znajzel-exercise-3/store', 'Exercise3@store');
Route::any('znajzel-exercise-final', 'ExerciseFinal@login');
Route::any('znajzel-exercise-final/store', 'ExerciseFinal@store');
