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
use App\Http\Controllers\NewplanningController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;





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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/* Dashboard*/
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');

Route::get('/', function () {
    return view('site.home.index');
})->name('site.home.index');

/* Transação*/
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
// Listar Receita
Route::get('/transaction/receita', [TransactionController::class, 'receita'])->name('transaction.receita');
Route::get('/transaction/despesa', [TransactionController::class, 'despesa'])->name('transaction.despesa');

// Rota para editar
Route::get('/transaction/edit/{id}', [TransactionController::class, 'edit'])->name('transaction.edit');

// Rota para excluir
Route::delete('/transaction/destroy/{transaction}', [TransactionController::class, 'destroy'])->name('transaction.destroy');




/* Metas*/
Route::get('/goals', [GoalsController::class, 'index'])->name('goals.index');
Route::post('/goals', [GoalsController::class, 'store'])->name('goals.store');
Route::delete('/goals/{goal}', [GoalsController::class, 'destroy'])->name('goals.destroy');



/* Escola Financeira*/
Route::get('/tip', [tipController::class, 'index'])->name('tip.index');
/* Definição*/
Route::get('/kixi', [KixiController::class, 'index'])->name('kixi.index');

/* contas */
Route::get('/account', [AccountController::class, 'index'])->name('account.index');
Route::post('/account', [AccountController::class, 'store'])->name('account.store');
Route::delete('/account/{id}', [AccountController::class, 'destroy'])->name('account.destroy');  // Corrigido para usar AccountController

/* Planejamento*/
Route::get('/planning', [PlanningController::class, 'index'])->name('planning.index');

Route::get('/planning/list', [App\Http\Controllers\PlanningController::class, 'list'])->name('planning.list');
Route::post('/planning/store', [App\Http\Controllers\PlanningController::class, 'store'])->name('planning.store');
Route::delete('/planning/{id}', [PlanningController::class, 'destroy'])->name('planning.destroy');

/* Novo Planejamento*/
Route::get('/newplanning', [NewplanningController::class, 'index'])->name('newplanning.index');
/* Relatorio*/
Route::get('/report', [ReportController::class, 'index'])->name('report.index');
/* Categoria*/
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
/* Calendario*/
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');

Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');



/* site*/
Route::get('/home', [HomeController::class, 'index'])->name('sitehome.index');