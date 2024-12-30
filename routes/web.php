<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;
use Filament\Facades\Filament; 
# guest
Route::get('/', function () {
    return view('guest.home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('guest.about', ['title' => 'About']);
});

Route::get('/promo', function () {
    return view('guest.promo', ['title' => 'Promo']);
});

Route::get('/contact', function () {
    return view('guest.contact', ['title' => 'Contact']);
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route khusus user
Route::middleware([RoleMiddleware::class . ':user'])->group(function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/about', [UserController::class, 'about'])->name('user.about');
    Route::get('/promo',[UserController::class, 'promo'])->name('user.promo');
    Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');
    Route::get('/booking', [UserController::class, 'booking'])->name('user.booking');
    Route::post('/createbooking', [UserController::class, 'createbooking'])->name('user.booking.create');
});

// Route khusus admin
Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/controls', [AdminController::class, 'controls'])->name('admin.controls');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/users/edit/{id}', [AdminController::class, 'editUsers'])->name('admin.editusers');
    Route::post('/admin/users/update/{id}', [AdminController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/delete/{id}', [AdminController::class, 'remove'])->name('admin.users.remove');
    Route::post('/admin/users/register', [AdminController::class, 'register'])->name('admin.users.register');
    Route::get('/admin/users/create', [AdminController::class, 'create'])->name('admin.users.create');
    Route::get('/admin/pc', [AdminController::class, 'pc'])->name('admin.pc');
    Route::get('/admin/pc/edit/{id}', [AdminController::class, 'editpc'])->name('admin.editpc');
    Route::post('/admin/pc/update/{id}', [AdminController::class, 'updatepc'])->name('admin.pc.update');
    Route::post('/admin/pc/createpc', [AdminController::class, 'createpcpost'])->name('admin.pc.create');
    Route::get('/admin/pc/create', [AdminController::class, 'createpc'])->name('admin.createpc');
    Route::delete('/admin/pc/delete/{id}', [AdminController::class, 'deletepc'])->name('admin.pc.delete');
    Route::get('/admin/transaksi', [AdminController::class, 'transaksi'])->name('admin.transaksi');
    // Route::get('/admin/promo', [AdminController::class, 'promo'])->name('admin.promo');
    Route::get('/admin/usercoin', [AdminController::class, 'usercoin'])->name('admin.usercoin');
    Route::get('/admin/coin/edit/{id}', [AdminController::class, 'editCoin'])->name('admin.editcoin');
    Route::post('/admin/coin/update/{id}', [AdminController::class, 'updatecoin'])->name('admin.coin.update');
});

// Pastikan ini ada untuk memuat rute Filament 
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Filament::routes() 
//     ->middleware(['auth', 'role:admin']) // Middleware tambahan 
//     ->group(function () { 
//             Filament::path('admin'); // Path untuk dashboard admin 
//         }); 
// });

// Route::middleware([RoleMiddleware::class . ':admin'])->group(function () {
//     Route::get('/admin', ['dashboard'])->name('filament.dashboard');
// });