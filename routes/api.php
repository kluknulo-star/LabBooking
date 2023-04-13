<?php

use App\Http\Controllers\DayController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/groups', [GroupController::class, 'index']);

Route::get('/groups/{group}/students', [GroupController::class, 'getStudentsByStream']);
Route::get('/groups/{group}/disciplins', [GroupController::class, 'getDisciplinsByStream']);
Route::get('/disciplins/{discipline}/labs', [DisciplineController::class, 'getLabs']);

Route::get('/days', [DayController::class, 'index']);
Route::get('/days/{day}/labLessons', [DayController::class, 'labLessons']);
Route::get('/days/{day}/timeLessons/{timeLesson}/students/{student}/cabinets/{cabinet}', [DayController::class, 'checkFree']);
