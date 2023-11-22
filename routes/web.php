<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// });

Route::get('/', function() {
    return view('company-profile.index');
});
// Route::resource('/dashboard', \App\Http\Controllers\DashboardController::class);
// Route::resource('/team', \App\Http\Controllers\TeamController::class);
