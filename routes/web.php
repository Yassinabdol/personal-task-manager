<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Test route works';
});

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/create', [TaskController::class, 'create']);

Route::post('/tasks', [TaskController::class, 'store']);

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);

Route::put('/tasks/{id}', [TaskController::class, 'update']);

Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

Route::patch('/tasks/{id}/status', [TaskController::class, 'toggleStatus']);