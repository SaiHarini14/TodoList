<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoListController;


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

Route::get('/',[todoListController::class,'index']);
Route::post('/saveItemRoute', [todoListController::class,'saveItem'])->name('saveItem');
Route::post('/markCompleteRoute/{id}', [todoListController::class,'markComplete'])->name('markComplete');
