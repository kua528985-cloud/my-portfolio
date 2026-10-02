<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::get('/projects', [ProjectController::class, 'portfolio']);

Route::prefix('dashboard')->group(function () {
    Route::view('/', 'dashboardpage.dashboard');
    Route::view('/contacts', 'dashboardpage.showcontacts');

    Route::get('/projects', [ProjectController::class, 'index']);
    Route::get('/projects/create', [ProjectController::class, 'create']);
    Route::post('/projects', [ProjectController::class, 'store']);
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit']);
    Route::put('/projects/{id}', [ProjectController::class, 'update']);
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);
});