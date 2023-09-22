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

Route::get('/api/roles', [RoleController::class, "index"]);
Route::get('/api/roles/{id}', [RoleController::class, "show"]);
Route::post('/api/roles', [RoleController::class, "store"]);
Route::put('/api/roles/{id}', [RoleController::class, "update"]);
Route::delete('/api/roles/{id}', [RoleController::class, "destroy"]);
//view routes
Route::get('/role/new', [RoleController::class, "newView"]);
Route::get('/role/list/{id}', [RoleController::class, "editView"]);
Route::get('/role/list', [RoleController::class, "listView"]);