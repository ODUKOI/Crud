<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/show', [StudentController::class,'show'])->name('show');
Route::get('/', [StudentController::class,'create'])->name('create');
Route::post('/store', [StudentController::class,'store'])->name('store');
Route::delete('/{id}', [StudentController::class,'destroy'])->name('delete');
