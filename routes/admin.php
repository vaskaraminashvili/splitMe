<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('welcome', [
        'event' => 'test'
    ]);
});


Route::get('/about', function () {
    return Inertia::render('about', [
        'event' => 'test'
    ]);
});


Route::prefix('module_generator')->name('module_generator.')->group(function () {
    Route::get('test', function () {
        return 'ok';
    })->name('index');
});
