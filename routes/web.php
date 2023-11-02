<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateRangeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DateRangeController::class, 'index']);
Route::post('daterange/fetch_data', [DateRangeController::class ,'fetch_data'])->name('daterange.fetch_data');

// Fallback Route
Route::fallback(function(){
    return "<h1>404 Route not exitst!</h1>";
});

