<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('issue', IssueController::class)->middleware(['auth']);
Route::resource('user', UserController::class)->middleware(['auth']);
Route::resource('role', RoleController::class)->middleware(['auth']);
Route::resource('category', CategoryController::class)->middleware(['auth']);
Route::resource('project', ProjectController::class)->middleware(['auth']);
