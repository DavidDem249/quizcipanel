<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});

Route::Group(['prefix' => 'auth'], function () { 
	Route::get('/login', [AuthController::class, 'login'])->name('login');
	Route::get('/register', [AuthController::class, 'register'])->name('register');

	Route::post('/authregister', [AuthController::class, 'postRegister'])->name('store.register');
	Route::post('/authlogin', [AuthController::class, 'postLogin'])->name('store.login');
	Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
	
});


/*****************************ADMIN ROUTES****************************************/
Route::Group(['prefix' => 'admin'], function () { 

	Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin');
	Route::get('/questions', [AdminDashboard::class, 'questions'])->name('show.questions');
	Route::get('/question/propositions/{id_question}', [AdminDashboard::class, 'propositionsQuestion'])->name('propositions');

});
