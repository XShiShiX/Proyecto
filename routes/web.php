<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
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

// Example Routes
//Route::view('/', 'landing');
Route::view('/', 'landing');

Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});

Route::get('/login', [SessionsController::class, 'login']);
Route::get('/registration', [SessionsController::class, 'registration']);

Route::post('/register-user', [SessionsController::class, 'registerUser'])->name('register-user');

Route::post('login-user', [SessionsController::class, 'loginUser'])->name('login-user');

Route::get('/dashboard', [SessionsController::class, 'dashboard']);




/*
Route::get('/login', function () {
    return view('auth.login');
});


Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::get('/login', [SessionsController::class, 'create'])->name('login.index');
Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
*/
