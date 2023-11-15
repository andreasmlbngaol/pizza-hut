<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home',
        'user' => User::where('id', '=', auth()->user()->id)->first(),
        'active' => 'Home'
    ]);
})->middleware('auth'); 

Route::get('/outlets', function () {
    return view('outlets.index', [
        'users' => User::whereNot('username', 'admin') ->orderBy('area_id')->orderBy('name')->get(),
        'title' => 'Outlets', 
        'active' => 'Outlets'
    ]);
}); 

Route::resource('/employees', EmployeeController::class)->middleware('auth'); 
Route::resource('/recipes', RecipeController::class)->middleware('auth'); 
Route::resource('/sellings', SellingController::class)->middleware('auth'); 
Route::resource('/surveys', SurveyController::class)->middleware('auth'); 

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);