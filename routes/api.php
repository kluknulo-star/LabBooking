<?php

use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\StreamController;
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

Route::get('/groups', [StreamController::class, 'index']);

Route::get('/groups/{group}/students', [StreamController::class, 'getStudentsByStream']);
Route::get('/groups/{group}/disciplins', [StreamController::class, 'getDisciplinsByStream']);
