<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function(){
    Route::get('/gbl', [App\Http\Controllers\GBLController::class, 'index'])->name('gbl'); 
});

Route::get('gbl', function () {

    $details = DB::table('gbl')->pluck('HT_CODE', 'LAST_NAME', 'FIRST_NAME', 'MIDDLE_NAME', 'VEHICLE_TYPE', 'VEHICLE_NO', 'DIGITAL_PUNCH_CARD_NO');
  
    return view('GBL', ['details' => $details]);
  
  });