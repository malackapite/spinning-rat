<?php

use App\Http\Controllers\DoingTaskController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;
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
Route::delete('/api/roles/{id}', [RoleController::class, "delete"]);
//view routes
Route::get('/role/new', [RoleController::class, "newView"]);
Route::get('/role/list/{id}', [RoleController::class, "editView"]);
Route::get('/role/list', [RoleController::class, "listView"]);


Route::get('/api/doingtasks', [DoingTaskController::class, "index"]);
Route::get('/api/doingtasks/{id}', [DoingTaskController::class, "show"]);
Route::post('/api/doingtasks', [DoingTaskController::class, "store"]);
Route::put('/api/doingtasks/{id}', [DoingTaskController::class, "update"]);
Route::delete('/api/doingtasks/{id}', [DoingTaskController::class, "destroy"]);
//view routes
Route::get('/doingtasks/new', [DoingTaskController::class, "newView"]);
Route::get('/doingtasks/list/{id}', [DoingTaskController::class, "editView"]);
Route::get('/doingtasks/list', [DoingTaskController::class, "listView"]);
Route::get('/api/amonguses', [AmongusController::class, 'index']);
Route::get('/api/amonguses/{id}', [AmongusController::class, 'show']);
Route::post('/api/amonguses', [AmongusController::class, 'store']);
Route::put('/api/amonguses/{id}', [AmongusController::class, 'update']);
Route::delete('/api/amonguses/{id}', [AmongusController::class, 'delete']);

Route::get('/amongus/list', [AmongusController::class, 'listView']);
Route::get('/amongus/new', [AmongusController::class, 'newView']);
Route::get('/amongus/edit/{id}', [AmongusController::class, 'editView']);
