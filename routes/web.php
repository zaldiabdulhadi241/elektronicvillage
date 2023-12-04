<?php

use App\Http\Controllers\AdminManageController;
use App\Http\Controllers\AdminTransactionController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionHistoryController;
use App\Models\Kategori;
use App\Models\Produk;
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
    return view('home', [
        'kategoriList' => Kategori::get(),
        'produkList' => Produk::latest()->get()->load('kategori'),
    ]);
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
})->prefix('admin')->middleware('admin', 'auth');

Route::post('/register', [RegisterController::class, 'store'])->prefix('auth');
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest')->prefix('auth');
Route::post('/login', [LoginController::class, 'authenticate'])->prefix('auth');
Route::post('/logout', [LoginController::class, 'logout'])->prefix('auth');
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->prefix('auth')->name('login');

Route::post('/checkout', [CheckoutController::class, 'process'])->middleware('auth')->prefix('user');
Route::get('/checkout/{transaction}', [CheckoutController::class, 'checkout'])->name("checkout");
Route::get('/checkout/success/{transaction}', [CheckoutController::class, 'success'])->name("checkout-success");


Route::get('/discover', function () {
    return view('produk.index');
});


Route::post('/keranjang', [KeranjangController::class, 'store'])->prefix('user')->middleware('auth');
Route::get('/keranjang/{user}', [KeranjangController::class, 'index'])->prefix('user')->middleware('auth');
Route::delete('/keranjang/{keranjang}', [KeranjangController::class, 'destroy'])->prefix('user')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->prefix('user');
Route::put('/profile', [ProfileController::class, 'update'])->prefix('user');
Route::put('/profile', [ProfileController::class, 'update'])->prefix('user');

Route::get('/transaction-history', [TransactionHistoryController::class, 'index'])->prefix('user');

Route::get('/produks', function () {
    $data = Produk::latest()->get()->load('kategori');
    return view('user.produkList', [
        'produkList' => $data,
        'title' => $data[1]->kategori->nama_kategori,
    ]);
});

Route::get('/produk', [ProdukController::class, 'index'])->prefix('admin');
Route::get('/produk/tambah/', [ProdukController::class, 'tambah_produk'])->prefix('admin');
Route::post('/produk', [ProdukController::class, 'store'])->prefix('admin');
Route::get('/produk/edit/{produk}', [ProdukController::class, 'edit'])->prefix('admin');
Route::put('/produk/{produk}', [ProdukController::class, 'update'])->prefix('admin');
Route::delete('/produk/{produk}', [ProdukController::class, 'destroy'])->prefix('admin');

Route::get('/brands', [BrandController::class, 'index'])->prefix('admin');
Route::get('/brands/tambah', [BrandController::class, 'tambah'])->prefix('admin');
Route::post('/brands', [BrandController::class, 'store'])->prefix('admin');
Route::get('/brands/edit/{brand}', [BrandController::class, 'edit'])->prefix('admin');
Route::put('/brands/{brand}', [BrandController::class, 'update'])->prefix('admin');
Route::delete('/brands/{brand}', [BrandController::class, 'destroy'])->prefix('admin');



Route::get('/produk/{produk:slug}', [ProdukController::class, 'show']);
Route::post('/produk/{produk:slug}', [ProdukController::class, 'addToCart']);


Route::get('/kategori', [KategoriController::class, 'index'])->prefix('user');
Route::post('/kategori', [KategoriController::class, 'store'])->prefix('user');
Route::put('/kategori', [KategoriController::class, 'update'])->prefix('user');
Route::delete('/kategori', [KategoriController::class, 'destroy'])->prefix('user');

Route::get('/user/users', [UserController::class, 'index']);
Route::post('/user/users', [UserController::class, 'store']);
Route::put('/user/users', [UserController::class, 'update']);
Route::delete('/user/users', [UserController::class, 'destroy']);

Route::get('/users', [AdminManageController::class, 'index'])->prefix('admin');
Route::get('/users/tambah', [AdminManageController::class, 'tambah'])->prefix('admin');
Route::post('/users', [AdminManageController::class, 'store'])->prefix('admin');
Route::get('/users/edit/{user}', [AdminManageController::class, 'edit'])->prefix('admin');
Route::put('/users/{user}', [AdminManageController::class, 'update'])->prefix('admin');
Route::delete('/users/{user}', [AdminManageController::class, 'destroy'])->prefix('admin');

Route::get('/transaksi', [TransactionController::class, 'index'])->prefix('user');
Route::post('/transaksi', [TransactionController::class, 'store'])->prefix('user');
// Route::put('/transaksi', [TransactionController::class, 'update'])->prefix('user');
// Route::delete('/transaksi', [TransactionController::class, 'destroy'])->prefix('user');
Route::get('/admin/transaksi', [AdminTransactionController::class, 'index']);
