<?php

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


Route::get('/drones', [droneController::class, 'list']);

Route::post('/drones', [droneController::class, 'insert']);

Route::put('/drones/{id}', [droneController::class, 'update']);

Route::delete('/drones/{id}', [droneController::class, 'delete']);

Route::get('/drones{id}', [droneController::class, 'create']);

Route::get('/drones?_page=7&_limit=20', [droneController::class, 'paginate']);

Route::get('/drones?_sort=id&_order=asc', [droneController::class, 'sort']);

Route::get('/drones?name=daniel&status=fail', [droneController::class, 'filter']);