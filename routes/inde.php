<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\FinanceController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\KixiController as AdminKixiController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\TipController as AdminTipController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\PartnerController as AdminPartnerController;
use App\Http\Controllers\Admin\ClientController as AdminClientController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\HomeSectionController;

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\TipController;
use App\Http\Controllers\KixiController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\NewplanningController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Rotas Públicas
|--------------------------------------------------------------------------
*/

// Teste de e-mail
Route::get('/test-email', function () {
    $user = (object)[
        'name' => 'Fulano Teste',
        'email' => 'seuemail@gmail.com'
    ];

    try {
        Mail::to($user->email)->send(new WelcomeMail($user));
        return '✅ E-mail de teste enviado com sucesso!';
    } catch (\Exception $e) {
        return '❌ Erro ao enviar e-mail: ' . $e->getMessage();
    }
});

// Login, logout, registro
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

// Recuperação de senha
Route::get('/password/forgot', [ForgotPasswordController::class, 'showForgotForm'])->name('password.request');
Route::post('/password/forgot', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Site público
Route::get('/', fn () => view('site.home.index'))->name('site.home.index');
Route::get('/home', [HomeController::class, 'index'])->name('sitehome.index');
Route::get('/about', [AboutController::class, 'index'])->name('site.about.index');
Route::get('/finance', [FinanceController::class, 'index'])->name('site.finance.index');

/*
|--------------------------------------------------------------------------
| Rotas Protegidas por Autenticação
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Perfil
    Route::post('/perfil/atualizar', [ProfileController::class, 'update'])->name('perfil.atualizar');

    // Transações
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
    Route::get('/transaction/receita', [TransactionController::class, 'receita'])->name('transaction.receita');
    Route::get('/transaction/despesa', [TransactionController::class, 'despesa'])->name('transaction.despesa');
    Route::get('/transaction/edit/{id}', [TransactionController::class, 'edit'])->name('transaction.edit');
    Route::delete('/transaction/destroy/{transaction}', [TransactionController::class, 'destroy'])->name('transaction.destroy');
    Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
    Route::get('/transactions/pdf', [TransactionController::class, 'exportPdf'])->name('transaction.pdf');
    Route::get('/transactions/{id}/pdf', [TransactionController::class, 'exportSinglePdf'])->name('transaction.pdf.single');
    Route::get('/transactions/{id}/download', [TransactionController::class, 'downloadPdf'])->name('transaction.download');

    // Metas
    Route::get('/goals', [GoalsController::class, 'index'])->name('goals.index');
    Route::post('/goals', [GoalsController::class, 'store'])->name('goals.store');
    Route::delete('/goals/{goal}', [GoalsController::class, 'destroy'])->name('goals.destroy');
    Route::put('/goals/{goal}', [GoalsController::class, 'update'])->name('goals.update');

    // Dicas
    Route::get('/tip', [TipController::class, 'index'])->name('tip.index');

    // Kixikila
    Route::get('/kixi', [KixiController::class, 'index'])->name('kixi.index');
    Route::post('/kixi/store', [KixiController::class, 'store'])->name('kixi.store');

    // Contas
    Route::get('/account', [AccountController::class, 'index'])->name('account.index');
    Route::post('/account', [AccountController::class, 'store'])->name('account.store');
    Route::delete('/account/{id}', [AccountController::class, 'destroy'])->name('account.destroy');
    Route::post('/account/{id}/despesa', [AccountController::class, 'adicionarDespesa'])->name('account.adicionarDespesa');

    // Planejamento
    Route::get('/planning', [PlanningController::class, 'index'])->name('planning.index');
    Route::get('/planning/list', [PlanningController::class, 'list'])->name('planning.list');
    Route::post('/planning/store', [PlanningController::class, 'store'])->name('planning.store');
    Route::delete('/planning/{id}', [PlanningController::class, 'destroy'])->name('planning.destroy');
    Route::get('/planning/pdf/export', [PlanningController::class, 'exportPdf'])->name('planning.export.pdf');

    // Novo Planejamento
    Route::get('/newplanning', [NewplanningController::class, 'index'])->name('newplanning.index');
    Route::get('/newplanning/create', [PlanningController::class, 'create'])->name('planning.create');

    // Relatório
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');

    // Categorias
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // Calendário
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');

    // Configurações
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
});

/*
|--------------------------------------------------------------------------
| Área Administrativa (Protegida por auth e is_admin)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/kixi', [AdminKixiController::class, 'index'])->name('kixi.index');
    Route::get('/contact', [AdminContactController::class, 'index'])->name('contact.index');

    Route::get('/tip', [AdminTipController::class, 'index'])->name('tip.index');
    Route::put('/tip/{id}', [AdminTipController::class, 'update'])->name('tip.update');
    Route::get('/tip/create', [AdminTipController::class, 'create'])->name('tip.create');
    Route::post('/tip/store', [AdminTipController::class, 'store'])->name('tip.store');
    Route::get('/tip/{id}/edit', [AdminTipController::class, 'edit'])->name('tip.edit');
    Route::delete('/tip/{id}', [AdminTipController::class, 'destroy'])->name('tip.destroy');

    Route::get('/user', [AdminUserController::class, 'index'])->name('user.index');
    Route::get('/blog', [AdminBlogController::class, 'index'])->name('blog.index');
    Route::resource('partner', AdminPartnerController::class);
    Route::get('/home', [HomeSectionController::class, 'index'])->name('home.index');
    Route::post('/home', [HomeSectionController::class, 'update'])->name('home.update');
    Route::resource('plans', App\Http\Controllers\Admin\PlanController::class);
});
