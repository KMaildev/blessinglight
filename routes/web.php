<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitieController::class);
Route::resource('job', JobController::class);
Route::resource('cv', CvController::class);
Route::resource('employer', EmployerController::class);

Route::resource('about', AboutController::class);
Route::get('/ceo_message', [AboutController::class, 'ceo_message'])->name('ceo_message');
Route::get('/team', [AboutController::class, 'team'])->name('team');
