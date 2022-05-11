<?php

use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PokemonDetailController;
use App\Http\Controllers\RegistrationController;
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
Route::get('/search', [SearchController::class, 'show'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('auth');
Route::get('/collections', [CollectionsController::class, 'show'])->middleware('auth');
Route::get('/pokemon/{id}', [PokemonDetailController::class, 'show'])->middleware('auth');


Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/users', [RegistrationController::class, 'store']);
Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/authenticate', [RegistrationController::class, 'authenticate'])->middleware('auth');
Route::post('/logout', [RegistrationController::class, 'logout'])->middleware('auth');