<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// homepage
Route::get('/', [JobController::class, 'homepage'])->name('homepage');


// Routes for User model
Route::get('/register', [UserController::class, 'registrationForm'])->name('userRegistrationPage');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');

Route::get("/login", [UserController::class, 'loginForm'])->name('loginFormPage');
Route::post("/login", [UserController::class, 'loginUser'])->name('loginUser');
Route::get("/logout", [UserController::class, 'logout'])->name('logout');

Route::get('/user/{id}', [UserController::class, 'userDetails'])->name('userDetails');


// Routes for Job model
Route::get('/post-job-ad', [JobController::class, 'createJobForm'])->name('jobFormPage');
Route::post('/post-job-ad', [JobController::class, 'createJobAd'])->name('makeJob');

Route::get("/post-job-ad/{id}", [JobController::class, 'jobDetailsPage'])->name('jobDetails');
Route::delete("/post-job-ad/{id}", [JobController::class, 'deleteJob'])->name('deleteJob');
