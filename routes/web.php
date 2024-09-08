<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/employers', function () {
    return view('employers');
});

Route::POST('/', [Controller::class, 'login']);
Route::GET('/dashboard', [Controller::class, 'dashboard']);
Route::GET('/employers', [Controller::class, 'employers']);
Route::POST('/employers', [Controller::class, 'getJob']);

