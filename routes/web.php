<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AbonneController;

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


	Route::post('/add-question', [QuestionsController::class, 'addQuestion'])->name('add.question');
	Route::post('/add-questions', [QuestionsController::class, 'addQuestions'])->name('add.questions');
	Route::get('/abonnes', [AbonneController::class, 'getAllAbonnes'])->name('allabonnes');
	Route::get('/abonne/details/{id_abonne}', [AbonneController::class, 'getDetailsAbonne'])->name('detail.abonne');
	//Route::post('/add-questions', [QuestionsController::class, 'addQuestions'])->name('add.questions');

});
