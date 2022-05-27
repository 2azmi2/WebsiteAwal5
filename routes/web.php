<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebAzmiController;
use App\Http\Controllers\WebAzmiBioController;
use App\Http\Controllers\WebAzmiCommentController;
use App\Http\Controllers\WebAzmiLoginController;
use App\Http\Controllers\WebAzmiRegisterController;
use App\Http\Controllers\WebAzmiLaptopController;
use App\Http\Controllers\WebAzmiSearchController;
use App\Http\Controllers\WebAzmiDashboardController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WebBioController;
use App\Http\Controllers\WebCommentController;


Route::get('/home', [WebAzmiController::class,'home']);
//Route::get('/', [WebController::class,'index']);
Route::get('/biodata', [WebAzmiBioController::class,'profile'])->middleware('auth');
//Route::get('/biodata', [WebBioController::class,'index']);
Route::get('/komentar', [WebAzmiCommentController::class,'advice'])->middleware('guest');
//Route::get('/komentar', [WebCommentController::class,'index']);
Route::get('/login', [WebAzmiLoginController::class,'login'])->name('login');
Route::post('/login', [WebAzmiLoginController::class,'authenticate']);
Route::post('/logout', [WebAzmiLoginController::class,'logout']);
Route::get('/register', [WebAzmiRegisterController::class,'index']);
Route::post('/register', [WebAzmiRegisterController::class,'store']);
Route::get('/dashboard', [WebAzmiDashboardController::class,'index']);
Route::resource('laptop', WebAzmiLaptopController::class)->middleware('auth');
Route::get('/search', [WebAzmiSearchController::class,'search'])->middleware('auth');