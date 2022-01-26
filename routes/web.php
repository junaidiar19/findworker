<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProfileSetupController;
use App\Http\Controllers\Worker\ProfileController as WorkerProfileController;
use App\Http\Controllers\Worker\PortofolioController;
use App\Http\Controllers\Worker\CertificateController;
use App\Http\Controllers\Worker\DashboardController as WorkerDashboardController;
use App\Http\Controllers\Worker\RecommendationController;
use App\Http\Controllers\WorkerDetailController;
use App\Http\Controllers\WorkerWaitController;
use App\Http\Livewire\HireIndex;
use App\Http\Livewire\QuickTeamIndex;

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

//


/*
    Quick Team:
    1. Pencarian berdasarkan kata kunci. Misal start up keuangan, maka akan muncul suggestion developer, ui ux, graphic designer
    2. kategori small team, medium team, big team
    3. Bekerja sama dengan platform pengembangan skill
    4. Membuat kelas pengembangan diri
*/

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('oauth/{driver}', [AuthController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback', [AuthController::class, 'handleProviderCallback'])->name('social.callback');
Route::post('/logout', LogoutController::class)->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Cek Kota
Route::get('/city-check', [RequestController::class, 'city'])->name('city-check');

// Hire Worker
Route::get('/hire-worker', HireIndex::class)->name('user.hire');
Route::get('/quick-team', QuickTeamIndex::class)->name('user.quick.team');

// Worker Waiting
Route::get('worker-wait', WorkerWaitController::class);

// Worker Detail
Route::get('hire-me/{username}', [WorkerDetailController::class, 'hire'])->name('worker.hire');
Route::get('profile/{username}', [WorkerDetailController::class, 'detail'])->name('worker.detail');

Route::get('/setup', [ProfileSetupController::class, 'setup'])->name('user.setup');
Route::group(['middleware' => 'auth', 'prefix' => 'profile'], function() {

    Route::middleware(['worker.variable'])->group(function () {
        Route::get('/setup/worker', [ProfileSetupController::class, 'setup_worker'])->name('user.setup.worker');
        Route::get('/setup/worker/additional', [ProfileSetupController::class, 'setup_worker_additional'])->name('user.setup.worker.additional');
        
        // Setup Action
        Route::post('/setup/worker', [ProfileSetupController::class, 'store_profile']);
        Route::post('/setup/worker/additional', [ProfileSetupController::class, 'store_additional']);
    });
    
    Route::get('/setup/recruiter', [ProfileSetupController::class, 'setup_recruiter'])->name('user.setup.recruiter');
});

Route::group(['middleware' => 'worker.variable', 'prefix' => 'worker'], function() {

    Route::middleware(['role:worker'])->group(function () {
        Route::get('/edit-profile', [WorkerProfileController::class, 'edit'])->name('worker.profile.edit');
    });

    Route::get('/dashboard', [WorkerDashboardController::class, 'index'])->name('worker.dashboard');
    Route::resource('portofolio', PortofolioController::class);
    Route::resource('certificate', CertificateController::class);
    Route::resource('recommendation', RecommendationController::class);
});

Auth::routes(['register' => false, 'password_reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
