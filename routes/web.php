<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DroneController;

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


Route::get('/drones', [DroneController::class, 'list']);

Route::post('/drones/', [DroneController::class, 'insert']);

Route::put('/drones/{id}', [DroneController::class, 'update']);

Route::delete('/drones/{id}', [DroneController::class, 'delete']);

Route::get('/drones{id}', [DroneController::class, 'create']);

Route::get('/drones?_page=7&_limit=20', [DroneController::class, 'paginate']);

Route::get('/drones?_sort=id&_order=asc', [DroneController::class, 'sort']);

Route::get('/drones?name=daniel&status=fail', [DroneController::class, 'filter']);