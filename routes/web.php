<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileSetupController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\Worker\DashboardController as WorkerDashboardController;
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

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('oauth/{driver}', [AuthController::class, 'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback', [AuthController::class, 'handleProviderCallback'])->name('social.callback');
Route::post('/logout', LogoutController::class)->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Cek Kota
Route::get('/city-check', [RequestController::class, 'city'])->name('city-check');

Route::group(['middleware' => 'auth', 'prefix' => 'profile'], function() {
    Route::get('/setup', [ProfileSetupController::class, 'setup'])->name('user.setup');

    Route::middleware(['worker.variable'])->group(function () {
        Route::get('/setup/worker', [ProfileSetupController::class, 'setup_worker'])->name('user.setup.worker');
        Route::get('/setup/worker/additional', [ProfileSetupController::class, 'setup_worker_additional'])->name('user.setup.worker.additional');
    });
    
    Route::get('/setup/recruiter', [ProfileSetupController::class, 'setup_recruiter'])->name('user.setup.recruiter');

    // Setup Action
    Route::post('/setup/worker', [ProfileSetupController::class, 'store_profile']);
    Route::post('/setup/worker/additional', [ProfileSetupController::class, 'store_additional']);
});

Route::group(['middleware' => 'role:worker', 'prefix' => 'worker', 'middleware' => 'worker.variable'], function() {
    Route::get('/dashboard', [WorkerDashboardController::class, 'index'])->name('worker.dashboard');
});

Auth::routes(['register' => false, 'password_reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
