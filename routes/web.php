<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\TipController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CalendarController;


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
Route::get('/', function () {
    return view('dashboard.index');
})->name('dashboard.index');

/* Transação*/
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
/* Metas*/
Route::get('/goals', [GoalsController::class, 'index'])->name('goals.index');
/* Escola Financeira*/
Route::get('/tip', [tipController::class, 'index'])->name('tip.index');
/* Definição*/
Route::get('/settings', [settingsController::class, 'index'])->name('settings.index');
/* Login*/
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
/* contas*/
Route::get('/account', [AccountController::class, 'index'])->name('Account.index');
/* Planejamento*/
Route::get('/planning', [PlanningController::class, 'index'])->name('planning.index');
/* Relatorio*/
Route::get('/report', [ReportController::class, 'index'])->name('report.index');
/* Categoria*/
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
/* Calendario*/
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

/* site*/
Route::get('/home', [HomeController::class, 'index'])->name('home.index');