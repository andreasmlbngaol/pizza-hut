<?php

use App\Models\User;
use App\Models\Outlet;
use App\Models\Recipe;
use App\Models\Survey;
use App\Models\Selling;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('welcome', [
        'title' => 'Home',
        'user' => User::where('id', '=', auth()->user()->id)->first(),
        'active' => 'Home'
    ]);
})->middleware('auth'); 

Route::get('/outlets', function () {
    return view('outlets', [
        'users' => User::orderBy('area_id')->orderBy('name')->get(),
        'title' => 'Outlets', 
        'active' => 'Outlets'
    ]);
}); 

Route::get('/employees', function () {
    if(auth()->user()->username !== 'admin') {
        $employees = Employee::where('user_id', '=', auth()->user()->id)->orderBy('name')->get();
    } else {
        $employees = Employee::orderBy('name')->get();
    }
    return view('employees', [
        'employees' => $employees,
        'title' => 'Employees', 
        'active' => 'Employees'
    ]);
})->middleware('auth'); 

Route::get('/recipes', function () {
    return view('recipes', [
        'recipes' => Recipe::orderBy('name')->get(),
        'title' => 'Recipes', 
        'active' => 'Recipes'
    ]);
})->middleware('auth'); 

Route::get('/sellings', function () {
    if(auth()->user()->username !== 'admin') {
        $sellings = Selling::where('user_id', '=', auth()->user()->id)->orderBy('date', 'desc')->get();
    } else {
        $sellings = Selling::orderBy('surplus', 'desc')->get();
    }
    return view('sellings', [
        'username' => auth()->user()->username,
        'sellings' => $sellings,
        'title' => 'Sellings', 
        'active' => 'Sellings'
    ]);
})->middleware('auth'); 

Route::get('/surveys', function () {
    if(auth()->user()->username !== 'admin') {
        $surveys = Survey::where('user_id', '=', auth()->user()->id)->orderBy('date', 'desc')->get();
    } else {
        $surveys = Survey::orderBy('rating', 'desc')->get();
    }
    return view('surveys', [
        'username' => auth()->user()->username,
        'surveys' => $surveys,
        'title' => 'Surveys', 
        'active' => 'Surveys'
    ]);
})->middleware('auth'); 


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);