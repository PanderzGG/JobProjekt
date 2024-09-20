<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});





//HomeController Route
Route::get('/', [HomeController::class, 'index'])->name('home');
// JobController Route
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('jobs/{id}', [JobController::class,'destroy'])->name('jobs.destroy');
// CompanyController Route
Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/{id}', [CompanyController::class, 'show'])->name('companies.show');
Route::get('/companies/{id}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
Route::put('/companies/{id}', [CompanyController::class, 'update'])->name('companies.update');
Route::post('/companies', [CompanyController::class,'store'])->name('company.store');
Route::delete('company/{id}', [CompanyController::class,'destroy'])->name('companies.destroy');
//CategoryController Route
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{id}/edit', [CategoryController::class,'edit'])->name('categories.edit');
Route::post('/categories', [CategoryController::class,'store'])->name('categories.store');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class,'destroy'])->name('categories.destroy');
//UserController Route
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/my-jobs', [UserController::class, 'myJobs'])->name('user.my-jobs');
Route::post('/user', [UserController::class,'store'])->name('user.store');
