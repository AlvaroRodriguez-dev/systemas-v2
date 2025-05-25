<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MobileLineController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('equipments', EquipmentController::class);
Route::resource('mobileLines', MobileLineController::class);
Route::resource('staff', StaffController::class);