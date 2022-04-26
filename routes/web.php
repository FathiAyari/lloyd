<?php

use App\Http\Controllers\AssuranceController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PdfController;
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


// route -> name,
//url->uri
// les routes protegées avec une methode da'uthentification securisé
Route::group(['middleware' => 'auth'], function () {
    Route::resource('clients', ClientController::class);
    Route::resource('messages', MessageController::class);
    Route::resource('cars', CarController::class);
    Route::resource('garantie', AssuranceController::class);
    Route::get('/dashboard', [App\Http\Controllers\DashBoardController::class, 'index'])->name("dashboard");
    Route::get('/search', [App\Http\Controllers\ClientController::class, 'search'])->name("search");
    Route::get('/clients/details', [App\Http\Controllers\ClientController::class, 'details'])->name("details");
    Route::get('/pdf', [PdfController::class, 'generatePdf'])->name("pdf");



});
