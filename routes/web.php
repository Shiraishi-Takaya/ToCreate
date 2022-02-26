<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [WorkController::class, 'index'])
    -> name('index');

Route::get('/works/{work}', [WorkController::class, 'show'])
    -> name('works.show');

Route::post('/works/add', [WorkController::class, 'add'])
    -> name('works.add');

Route::delete('/works/{work}/destroy', [WorkController::class, 'destroy'])
    -> name('works.destroy');

Route::get('/features/{feature}', [FeatureController::class, 'show'])
    -> name('features.show');

Route::post('/works/{work}/features', [FeatureController::class, 'add'])
    -> name('features.add');

Route::delete('/features/{feature}/destroy', [FeatureController::class, 'destroy'])
    -> name('features.destroy');

Route::post('/features/{feature}/tasks', [TaskController::class, 'add'])
    -> name('tasks.add');

Route::delete('/tasks/{task}/destroy', [TaskController::class, 'destroy'])
    -> name('tasks.destroy');

