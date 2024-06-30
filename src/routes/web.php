<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/admin', [AuthenticatedSessionController::class, 'sotre']);
Route::post('/admin', [AuthenticatedSessionController::class, 'destroy']);
/*Route::get('/register', [AuthenticatedSessionController::class, 'create']);
Route::post('/register', [AuthenticatedSessionController::class, 'store']);*/

Route::post('/attendance', [AuthenticatedSessionController::class, 'attendance']);

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'index']);
});

