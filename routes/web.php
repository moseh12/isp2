<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlanController; // Make sure to import PlanController

Route::get('/', function () {
    return view('welcome');
});

// Admin registration routes
Route::get('/admin/register', [AdminController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.submit');

// Admin login routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Admin dashboard routes
Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');

// Admin profile routes
Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile.update');

// Admin user routes
Route::get('/admin/user', [AdminController::class, 'showUserList'])->name('admin.user');
Route::post('/users', [AdminController::class, 'store'])->name('users.store');

Route::get('/admin/plans', [PlanController::class, 'index'])->name('plans.index');
// User-related routes
Route::get('admin/user/pppoe', [UserController::class, 'pppoeUserList'])->name('admin.user.pppoe');
Route::get('admin/user/hotspot', [UserController::class, 'hotspotUserList'])->name('admin.user.hotspot');

// Admin plans routes
Route::prefix('admin')->group(function () {
    Route::resource('plans', PlanController::class); // Manage plans through resource routes

    Route::get('/users/create', [UserController::class, 'create'])->name('admin.user.create');
    // Add other admin user routes here

    Route::put('/users/{id}', [AdminController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');
});

// Admin logout route
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
