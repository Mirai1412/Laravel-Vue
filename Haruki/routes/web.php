<?php

use App\Http\Controllers\TeaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('layouts/app');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

// axios.get(`/users/${user.id}`, { user: { id: id, name: user.name }})
// 이미지같은 걸 넘겨줄땐 FormData

// Route::get('/users/{user}', controller index);
// Route::get('/', [TeaController::class, 'index'])->name('tea.index');
Route::get('/', function () { // GET / 로 접근하면 이 함수 실행
    return view('Home');
});
Route::get('/menu', function () {
    return view('Menu');
});
// POST /store 로 접근하면 TeaController의 'store'메소드 실행
Route::post('/store', [TeaController::class, 'store'])->name('tea.store');
// Route::get('/menu', [TeaController::class, 'show'])->name('tea.show');
