<?php

use App\Http\Controllers\TeaController;
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


Route::get('/make', [TeaController::class, 'create'])->name('Make');
Route::post('/store', [TeaController::class, 'store'])->name('Store');
Route::get('/menu', [TeaController::class, 'index'])->name('Menu');
Route::get('/show/{tea}', [TeaController::class, 'show'])->name('Show');
Route::delete('/teas/{tea}', [TeaController::class, 'destroy']);

Route::post('/teas/{tea}',[TeaController::class, 'update'])->name('Update');

Route::get('/peas1', function() {return Inertia::render('Xoasf');});
Route::get('/peas2', function() {return Inertia::render('Xeasf');});

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


