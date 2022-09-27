<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainViewController;

//Auth controllers
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

//Dashboard controllers
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\EntryController;


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

//Routes for everyone
Route::get('/', [MainViewController::class, 'index']);
Route::get('/contact', [MainViewController::class, 'contact']);

//Routes for guests only
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'check']);

    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
});

//Routes for authenticated users only
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LogoutController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::post('dashboard/add_entry', [EntryController::class, 'store']);
    Route::get('dashboard/add_entry/{category_id}', [EntryController::class, 'create']);

    Route::get('dashboard/show_entries/{category_id}', [EntryController::class, 'index']);
});
