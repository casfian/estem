<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//add
use App\Http\Controllers\CheckController;
use App\Http\Controllers\HomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']], function() {
    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
});

// Route::middleware(['auth','HasPermission'])->group(function () {
//     Route::get('/create',[CheckController::class, 'create']);
//     Route::get('/',[CheckController::class, 'index']);
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
