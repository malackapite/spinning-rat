<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/tasks', [TaskController::class, 'index']);
Route::get('/api/tasks/{id}', [TaskController::class, 'show']);
Route::post('/api/tasks', [TaskController::class, 'store']);
Route::put('/api/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/api/tasks/{id}', [TaskController::class, 'delete']);
Route::get('/task/list', [TaskController::class, 'listView']);
Route::get('/task/new', [TaskController::class, 'newView']);
Route::get('/task/edit/{id}', [TaskController::class, 'editView']);
Route::get('/api/roles', [RoleController::class, "index"]);
Route::get('/api/roles/{id}', [RoleController::class, "show"]);
Route::post('/api/roles', [RoleController::class, "store"]);
Route::put('/api/roles/{id}', [RoleController::class, "update"]);
Route::delete('/api/roles/{id}', [RoleController::class, "destroy"]);
//view routes
Route::get('/role/new', [RoleController::class, "newView"]);
Route::get('/role/list/{id}', [RoleController::class, "editView"]);
Route::get('/role/list', [RoleController::class, "listView"]);
