<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\AttendanceController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'index']);
    Route::post('/attendance', [AttendanceController::class, 'attendance']);
    Route::post('/attendance/workStart', [AttendanceController::class, 'workStart']);
    Route::post('/attendance/workEnd', [AttendanceController::class, 'workEnd']);
    Route::post('/attendance/breakStart', [AttendanceController::class, 'breakStart']);
    Route::post('/attendance/breakEnd', [AttendanceController::class, 'breakEnd']);
});