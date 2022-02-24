<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\WorkController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/signup', function () {
    return view('auth.signup');
}) -> name('auth.signup');

Route::get('/settings', function () {
    return view('auth.settings');
}) -> name('auth.settings');

Route::get('/list', [IndexController::class, 'index'])
    -> name('index');

Route::get('/work/{work}', [WorkController::class, 'work'])
    -> name('work');

Route::get('/function', function () {
    return view('function');
}) -> name('function');

