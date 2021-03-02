<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\ProductGroupController;
use App\Http\Controllers\rankingExportController;
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

Route::get('/Dashboard', [dashboardController::class, 'index'])->name('Dashboard');
Route::get('/History', [historyController::class, 'index'])->name('History');
Route::get('/ProductGroup', [ProductGroupController::class, 'index'])->name('ProductGroup');
Route::get('/RankingExport', [rankingExportController::class, 'index'])->name('RankingExport');