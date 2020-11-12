<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\LinkController;

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

Route::get('/step', function () {
    return view('step');
})->name('step');

Route::get('/blog1', function () {
    return view('index');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog1/{id}',[ProjectController::class,'index'])->name('project');
Route::get('/step/{id}',[StepController::class,'index'])->name('step');
//Route::get('/step/{id}',[LinkController::class,'index'])->name('step');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//Route::get('/step/{id}',[StepController::class,'show'])->name('step');