<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function(){

Route::middleware('auth')->group(function () {
    Route::get('/profile/password', [ProfileController::class, 'changepassword'])->name('profile.change.password');
    
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile/view', [ProfileController::class, 'view'])->name('profile.view');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
    Route::post('/profile/password', [ProfileController::class, 'updatepassword'])->name('profile.password.update');

});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/terms', [AdminController::class, 'terms'])->name('admin.terms');

});
});
require __DIR__.'/auth.php';