<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// homepage
Route::get('/', [JobController::class, 'homepage'])->name('homepage');


// Routes for User model
Route::get('/register', [UserController::class, 'registrationForm'])->name('userRegistrationPage')->middleware('guest');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser')->middleware('guest');

Route::get("/login", [UserController::class, 'loginForm'])->name('loginFormPage')->middleware('guest');
Route::post("/login", [UserController::class, 'loginUser'])->name('login')->middleware('guest');
Route::get("/logout", [UserController::class, 'logout'])->name('logout')->middleware('guest');

Route::get('/user/{id}', [UserController::class, 'userDetails'])->name('userDetails');


// Routes for Job model
Route::get('/post-job-ad', [JobController::class, 'createJobForm'])->name('jobFormPage')->middleware('auth');
Route::post('/post-job-ad', [JobController::class, 'createJobAd'])->name('makeJob')->middleware('auth');

Route::get("/post-job-ad/{id}", [JobController::class, 'jobDetailsPage'])->name('jobDetails')->middleware('auth');
Route::delete("/post-job-ad/{id}", [JobController::class, 'deleteJob'])->name('deleteJob')->middleware('auth');
