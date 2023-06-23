<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\SAVINGDATSCONTROLLER;
use App\Http\Controllers\deletecontroller;


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
Route::view('/table','pagination');
Route::get('pagn',[PaginationController::Class,'pagin']);

Route::view('/save', 'SAVEDATA');
Route::get('add',[SAVINGDATSCONTROLLER::Class,'savaing_data']);
Route::view('delete','deletedata');
Route::get('delete1',[deletecontroller::Class,'delete']);
Route::get('delete2/{film_id}',[deletecontroller::Class,'delete2']);