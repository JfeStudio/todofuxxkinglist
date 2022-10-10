<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/', HomeController::class);

Route::resource('tasks', TaskController::class);

// Route::get('tasks', [TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');
Route::get('users/{user}/edit' , [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}' , [UserController::class, 'update'])->name('users.update');
Route::delete('users/{id}' , [UserController::class, 'destroy'])->name('users.destroy');
// Route::get('users', [UserController::class, 'index']);

Route::resource('animals', AnimalController::class);

// Route::get('animals', [AnimalController::class, 'index']);
// Route::post('animals', [AnimalController::class, 'store']);
// Route::get('animals/{id}/edit', [AnimalController::class, 'edit']);
// Route::put('animals/{id}', [AnimalController::class, 'update']);
// Route::delete('animals/{id}', [AnimalController::class, 'delete'])->name('animals.destroy');