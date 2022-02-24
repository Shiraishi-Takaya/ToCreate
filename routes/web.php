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

Route::get('/features/{feature}/', [FeatureController::class, 'show'])
    -> name('features.show');

Route::post('/features/{feature}/tasks', [TaskController::class, 'add'])
    -> name('tasks.add');

