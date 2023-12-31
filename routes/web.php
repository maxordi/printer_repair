<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\MasterController;
use App\Http\Controllers\Admin\PrinterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RepairController;
use App\Http\Controllers\Admin\RepairRequestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\SuccesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
Route::get('/about_us', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// Маршруты для подтверждения почты
// Маршрут для отображения уведомления о проверке электронной почты
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// Маршрут для обработки запросов, генерируемых при клике на ссылку для подтверждения электронной почты
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home'); // Измените на ваш путь
})->middleware(['auth', 'signed'])->name('verification.verify');

// Маршрут для повторной отправки письма с подтверждением
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Защищенный маршрут, доступный только для проверенных пользователей
Route::get('/profile', function () {
    // Только проверенные пользователи могут получить доступ к этому маршруту...
})->middleware(['auth', 'verified']);


Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('printers', PrinterController::class)
        ->except('show');
    Route::resource('masters', MasterController::class)
        ->except('show');
    Route::resource('clients', ClientController::class)
        ->except('show');
    Route::resource('repair_requests', RepairRequestController::class)
        ->except(['show', 'create']);
    Route::resource('repairs', RepairController::class)
        ->except('show');
});
Route::get('/success', [SuccesController::class, 'index'])->name('success');


// Отдельный маршрут для метода 'create' без middleware 'isAdmin'
    Route::middleware(['auth'])->group(function () {
        Route::get('repair_requests/create', [RepairRequestController::class, 'create'])
            ->name('repair_requests.create');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
