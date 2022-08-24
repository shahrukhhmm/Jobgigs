<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobController;
use App\Http\Controllers\userController;

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

// all jobs
Route::get('/', [jobController::class , 'index']);

// create job form
Route::get('/jobs/create', [jobController::class , 'create'])->middleware('auth');

// store job form
Route::post('/jobs', [jobController::class , 'store'])->middleware('auth');

// Edit From
Route::get('/jobs/{job}/edit', [jobController::class,'edit'])->middleware('auth');

//update job
Route::put('/jobs/{job}', [jobController::class,'update'])->middleware('auth');

// delete gig
Route::delete('/jobs/{job}', [jobController::class,'destroy'])->middleware('auth');

// manage jobgigs
Route::get('/jobs/manage',[jobController::class,'manage'])->middleware('auth');

// single  jobgig
Route::get('/jobs/{job}', [jobController::class, 'show']);

// register  form
Route::get('/register', [userController::class, 'create'])->middleware('guest');

// create a user
Route::post('/users',[userController::class,'store']);

// logout  user
Route::post('/logout',[userController::class,'logout'])->middleware('auth');

//show login  form
Route::get('/login',[userController::class,'login'])->name('login')->middleware('guest');

// login  in user
Route::post('/users/authenticate',[userController::class,'authenticate']);

