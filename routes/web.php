<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\RegisterController;
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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')  ->group(function() {
    Route::get('/', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login_form');
    Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin.login');
    Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function() {
        Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
   
        Route::get('/users', [UserController::class, 'index'])->name('users_listing');
        Route::get('/user_listing', [UserController::class, 'index'])->name('user_listing');  
        Route::get('/add_user', [UserController::class, 'create'])->name('add_user');
        Route::post('/save_user', [UserController::class, 'store'])->name('save_user');
        Route::get('/user_delete/{id}', [UserController::class, 'destroy'])->name('user_delete');
        Route::get('/user_edit/{id}', [UserController::class, 'edit'])->name('user_edit');
        Route::post('/user_update/{id}', [UserController::class, 'update'])->name('user_update');

        Route::get('/roles', [UserController::class, 'roles'])->name('roles');  
        Route::get('/add_role', [UserController::class, 'addRole'])->name('add_role');
        Route::post('/save_role', [UserController::class, 'saveRole'])->name('save_role');


        Route::get('/locations', [LocationController::class, 'index'])->name('location');  
        Route::get('/create', [LocationController::class, 'create'])->name('add_location');
        Route::post('/save_location', [LocationController::class, 'store'])->name('save.location');

        Route::get('/logo_settings', [SettingController::class, 'logo_setting'])->name('logo_setting');
        Route::post('/save_logo_details', [SettingController::class, 'save_logo_settings'])->name('save_logo_details');
       
    });
   
});

       


Route::get('/run-command', function () {
    // Replace 'your:command' with the Artisan command you want to run
    Artisan::call('storage:link');
    
    // Optionally, return a response or the output of the command
    return Artisan::output();
});

Route::get('/run-migrations', function () {
    // Run the migrations
    Artisan::call('migrate');
    
    // Return the output of the migration process
    return Artisan::output();
});