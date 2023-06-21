<?php


use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\MasterController;
use App\Http\Controllers\Admin\PrinterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RepairController;
use App\Http\Controllers\Admin\RepairRequestController;
use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [StartController::class, 'index']);

Route::prefix('admin')->group(function (){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('printers', PrinterController::class)
    ->except('show');
    Route::resource('masters', MasterController::class)
        ->except('show');
    Route::resource('clients', ClientController::class)
        ->except('show');
    Route::resource('repair_requests', RepairRequestController::class)
        ->except('show');
    Route::resource('repairs', RepairController::class)
    ->except('show');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
