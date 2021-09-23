<?php

use App\Http\Controllers\Admin\ActiveCampaignClientController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserAlertController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Livewire\Pages\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



/**
 * App Routes
 */
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class);
    Route::get('/profile', Profile::class);
});

/**
 * Authentication
 */
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('auth.login');
    // Route::redirect('/', '/login');
    Route::get('/signup', Register::class)->name('public.signup');

});




Auth::routes(['register' => true]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Active Campaign Client
    Route::post('active-campaign-clients/csv', [ActiveCampaignClientController::class, 'csvStore'])->name('active-campaign-clients.csv.store');
    Route::put('active-campaign-clients/csv', [ActiveCampaignClientController::class, 'csvUpdate'])->name('active-campaign-clients.csv.update');
    Route::resource('active-campaign-clients', ActiveCampaignClientController::class, ['except' => ['store', 'update', 'destroy']]);

    // User Alert
    Route::get('user-alerts/seen', [UserAlertController::class, 'seen'])->name('user-alerts.seen');
    Route::resource('user-alerts', UserAlertController::class, ['except' => ['store', 'update', 'destroy']]);

    // Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
