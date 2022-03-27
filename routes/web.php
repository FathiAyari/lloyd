<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
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
Route::get('/',function (){
    return view('index');
});


Auth::routes();
Route::resource('clients', ClientController::class);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route -> name,url->path
// les routes protegées avec une methode da'uthentification securisé
Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [App\Http\Controllers\DashBoardController::class, 'index'])->name("dashboard");

    Route::get('/vehicules', [App\Http\Controllers\CarController::class, 'index'])->name("vehicules");
    Route::get('/test', [App\Http\Controllers\testContrller::class, 'index']);
});
