<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\TipController;
use App\Http\Controllers\KixiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ContaController;



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

/* Dashboard*/
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');

Route::get('/', function () {
    return view('site.home.index');
})->name('site.home.index');

/* Transação*/
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
/* Metas*/
Route::get('/goals', [GoalsController::class, 'index'])->name('goals.index');
Route::post('/goals', [GoalsController::class, 'store'])->name('goals.store');
Route::delete('/goals/{goal}', [GoalsController::class, 'destroy'])->name('goals.destroy');



/* Escola Financeira*/
Route::get('/tip', [tipController::class, 'index'])->name('tip.index');
/* Definição*/
Route::get('/kixi', [KixiController::class, 'index'])->name('kixi.index');
/* Login*/
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
/* contas*/
Route::get('/account', [AccountController::class, 'index'])->name('account.index');
/* Planejamento*/
Route::get('/planning', [PlanningController::class, 'index'])->name('planning.index');
/* Relatorio*/
Route::get('/report', [ReportController::class, 'index'])->name('report.index');
/* Categoria*/
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
/* Calendario*/
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

Route::post('/salvar-conta', [ContaController::class, 'store']);


/* site*/
Route::get('/home', [HomeController::class, 'index'])->name('sitehome.index');