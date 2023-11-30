<?php

use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\AdminPage;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Customer\BarangController as CustomerBarangController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Barang\ShowController as BarangShowController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\BuatMesinController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\customer\KeranjangController;
use App\Http\Controllers\customer\PerusahaanController as CustomerPerusahaanController;
use App\Http\Controllers\customer\PendaftaranController as CustomerPendaftaranController;
use App\Http\Controllers\Customer\MessageController as CustomerMessageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataLahanController;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\MesinController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TransaksiController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Auth::routes(['login' => false, 'register' => false, 'verify' => true, 'password.reset' => false, 'email.verify' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cek-role', function () {
    if (auth()->user()->hasRole(['admin'])) {
       return view('/');
    } else {
       return view('/home');
    }

});

route::middleware('guest')->group(function(){
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');



});

    Route::get('/store', [CustomerBarangController::class, 'index']);
    Route::get('/show', [BarangShowController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dt-perusahaan', [CustomerPerusahaanController::class, 'index']);
    Route::get('/daftar', [CustomerPendaftaranController::class, 'index']);
    Route::get('/contact-us', [CustomerMessageController::class, 'index']);
    Route::get('/keranjang', [KeranjangController::class, 'index']);





Route::middleware(['auth', 'role:admin'])->group(function() {


    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/dt-barang', [BarangController::class, 'index'])->name('dt-barang');
    Route::get('/sewa', [SewaController::class, 'index'])->name('sewa');
    Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian');
    Route::get('/buat-mesin', [BuatMesinController::class, 'index'])->name('buat-mesin');
    Route::get('/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan');
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
    Route::get('/mesin', [MesinController::class, 'index'])->name('mesin');
    Route::get('/pemesan', [PemesanController::class, 'index'])->name('pemesan');
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
    Route::get('/chart', [ChartController::class, 'index'])->name('chart');
    Route::get('/message1', [MessageController::class, 'index'])->name('message1');
    Route::get('/lahan', [LahanController::class, 'index'])->name('lahan');
    Route::get('/dt-lahan', [DataLahanController::class, 'index'])->name('dt-lahan');
    Route::get('/admin', [AdminPageController::class, 'index']);











});

Route::middleware(['auth', 'role:customer'])->group(function (){

});
