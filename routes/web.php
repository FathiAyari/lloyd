<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;
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

Route::get('/aa', function () {
      return view('admin.index');
});

Route::get('/dashboard', [App\Http\Controllers\DashBoardController::class, 'index'])->name("dashboard");
Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name("clients");
Route::get('/vehicules', [App\Http\Controllers\CarController::class, 'index'])->name("vehicules");
/*Route::get('/assurances', [App\Http\Controllers\AssuranceController::class, 'index'])->name("clients");*/
