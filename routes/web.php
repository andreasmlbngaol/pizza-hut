<?php

use App\Models\Outlet;
use App\Models\Recipe;
use App\Models\Survey;
use App\Models\Selling;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth'); 

Route::get('/outlets', function () {
    return view('outlets', [
        'outlets' => Outlet::orderBy('area_id')->get()
    ]);
})->middleware('auth'); 

Route::get('/employees', function () {
    return view('employees', [
        'employees' => Employee::where('outlet_id', '=', auth()->user()->id)->orderBy('name')->get()
    ]);
})->middleware('auth'); 

Route::get('/recipes', function () {
    return view('recipes', [
        'recipes' => Recipe::orderBy('name')->get()
    ]);
})->middleware('auth'); 

Route::get('/sellings', function () {
    return view('sellings', [
        'sellings' => Selling::where('outlet_id', '=', auth()->user()->id)->orderBy('date')->get()
    ]);
})->middleware('auth'); 

Route::get('/surveys', function () {
    return view('surveys', [
        'surveys' => Survey::where('outlet_id', '=', auth()->user()->id)->orderBy('date')->get()
    ]);
})->middleware('auth'); 


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);