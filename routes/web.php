<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Resources;
use App\Models;
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

// Главная страница
Route::get('/', function () {
    return view('welcome');
});

//Конференции
Route::get('/conferences', [Controllers\ConferenceController::class, 'index']);
Route::get('/conference/add', [Controllers\ConferenceController::class, 'add']);
Route::get('/conference/{conference}', [Controllers\ConferenceController::class, 'view']);
Route::get('/conference/{conference}/edit', [Controllers\ConferenceController::class, 'edit']);
Route::delete('/conference/{conference}/delete', [Controllers\ConferenceController::class, 'drop'])->name('conferences.delete');

Route::post('/conference/{conference}/edit', [Controllers\ConferenceController::class, 'store']);
Route::post('/conference/add', [Controllers\ConferenceController::class, 'store']);

//Пользователи
Route::get('/users', [Controllers\UserController::class, 'index']);
Route::get('/user/add', [Controllers\UserController::class, 'add']);
Route::get('/user/{user}', [Controllers\UserController::class, 'view']);
Route::get('/user/{user}/edit', [Controllers\UserController::class, 'edit']);
Route::delete('/user/{user}/delete', [Controllers\UserController::class, 'drop'])->name('users.delete');

Route::post('/user/{user}/edit', [Controllers\UserController::class, 'store']);
Route::post('/user/add', [Controllers\UserController::class, 'store']);

// json
Route::get('/api/users', function() { return Resources\UserResource::collection(Models\User::all()->load("conference")); });
Route::get('/api/conferences', function() { return Resources\ConferenceResource::collection(Models\Conference::all()); });


