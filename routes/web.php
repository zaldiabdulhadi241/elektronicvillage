<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionHistoryController;
use App\Models\Keranjang;
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
Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('produk.detail');
});

Route::post('/register', [RegisterController::class, 'store'])->prefix('auth');
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest')->prefix('auth');
Route::post('/login', [LoginController::class, 'authenticate'])->prefix('auth');
Route::post('/logout', [LoginController::class, 'logout'])->prefix('auth');
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->prefix('auth')->name('login');

Route::get('/checkout', [CheckoutController::class, 'index'])->middleware('auth');
Route::get('/discover', function () {
    return view('produk.index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->prefix('admin')->middleware('auth');

Route::get('/keranjang', [KeranjangController::class, 'index'])->prefix('user')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->prefix('user');
Route::put('/profile', [ProfileController::class, 'update'])->prefix('user');
Route::put('/profile', [ProfileController::class, 'update'])->prefix('user');

Route::get('/transaction-history', [TransactionHistoryController::class, 'index'])->prefix('user');
