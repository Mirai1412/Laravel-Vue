<?php

use Illuminate\Foundation\Application;
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


Route::get('/menu', function() {
    return Inertia::render('Menu');
});
Route::get('/make', function() {
    return Inertia::render('Make');
})->name('Make');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('Home');


//하단바
Route::get('/text1', function() {return Inertia::render('text/Texto');});
Route::get('/text2', function() {return Inertia::render('text/Textt');});
Route::get('/text3', function() {return Inertia::render('text/Texts');});
Route::get('/text4', function() {return Inertia::render('text/Textf');});
Route::get('/text5', function() {return Inertia::render('text/Textv');});
//하단바
