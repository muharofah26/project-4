<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

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
    return view('index');
});


Route::get('category', function () {
    return view('category');
});


Route::get('clients', function () {
    return view('clients');
});


Route::get('contact', function () {
    return view('contact');
});


Route::get('products', function () {
    return view('products');
});


Route::get('welcome', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('shopping-bag', function () {
    return view('shopping-bag');
});
Route::get('tamplate', function () {
    return view('tamplate.base');
});

Route::get('/base', function () {
    return view('admin.base');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showkategori']);
Route::get('login_admin', [HomeController::class, 'showlogin_admin']);    

Route::get('produk', [produkController::class, 'index']);
Route::get('produk/create', [produkController::class, 'create']);
Route::post('produk', [produkController::class, 'store']);
Route::get('produk/{produk}', [produkController::class, 'show']);
Route::get('produk/{produk}/edit', [produkController::class, 'edit']);
Route::put('produk/{produk}', [produkController::class, 'update']);
Route::delete('produk/{produk}', [produkController::class, 'destroy']);

Route::get('/Promo', function () {
    return view('admin.section.Promo');
});

Route::get('/Pelanggan', function () {
    return view('admin.section.Pelanggan');
});

Route::get('/Supplier', function () {
    return view('admin.section.Supplier');
});