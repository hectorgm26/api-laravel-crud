<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Todas las rutas de tipo API tienen el prefijo 'api' implicito, es decir, al '/user' se accede a través de '/api/user'

Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout']);
Route::post('auth/refresh', [AuthController::class, 'refresh']);
Route::post('auth/me', [AuthController::class, 'me']);

/* // Listar registros
Route::get('/users', [UserController::class, 'index']);
// Crear registro
Route::post('/users', [UserController::class, 'store']);
// Recuperar registro
// http://api-crud-laravel.test/api/users/1
Route::get('/users/{id}', [UserController::class, 'show']);
// Actualizar registro
Route::put('/users/{id}', [UserController::class, 'update']);
// Eliminar registros
Route::delete('/users/{id}', [UserController::class, 'destroy']); */

Route::apiResource('/users', UserController::class);
Route::apiResource('/tasks', TaskController::class);
Route::apiResource('/categories', CategoryController::class);

Route::apiResource('/permissions', PermissionController::class);
Route::apiResource('/roles', RoleController::class);

Route::apiResource('/posts', PostController::class);
Route::post('/posts/{post}/tags', [PostController::class, 'tags']);

Route::get('/prueba', function() {
    return auth()->user();
});