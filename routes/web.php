<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

// Route group admin
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.admin');

    // Route::group parent kategori
        Route::group(['prefix' => '/kategori'], function (){
            Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
            Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
            Route::get('/edit', [KategoriController::class, 'edit'])->name('kategori.edit');

        });

         //Route::group parent Produk
         Route::group(['prefix' => '/produk'], function (){
            Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
            Route::get('/create', [ProdukController::class, 'create'])->name('produk.create');
            Route::get('/edit', [ProdukController::class, 'edit'])->name('produk.edit');
            Route::get('/show', [ProdukController::class, 'show'])->name('produk.show');

        });

        //Route::group parent transaksi
        Route::group(['prefix' => '/transaksi'], function (){
            Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
            Route::get('/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
            Route::get('/show', [TransaksiController::class, 'show'])->name('transaksi.show');

        });

        //Route Customer
        Route::group(['prefix'=>'/customer'], function(){
            Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
            Route::get('/edit', [CustomerController::class, 'edit'])->name('customer.edit');
        });

        Route::group(['prefix'=>'/laporan'], function(){
            Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');
            Route::get('/proses', [LaporanController::class, 'proses'])->name('laporan.proses');
        });

        Route::group(['prefix'=>'/user'], function(){
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::get('/setting', [UserController::class, 'setting'])->name('user.setting');
        });

});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);


// {{-- Start --}}
//  Route UTS vs Referens Bu Eka
// Route::get('/mahasiswa', function(){
//     return view ('mahasiswa/index');
// });

// Route::group(['prefix' => '/mahasiswa', 'as'=> 'mahasiswa.'], function(){
//     Route::get('/pendaftaran', function(){
//         return 'Halaman Pendaftaran';
//     })->name('pendaftaran');
//     Route::get('/ujian', function(){
//         return 'Halaman Ujian';
//     })->name('ujian');

//     Route::get('/nilai', function(){
//         return 'Halaman Nilai';
//     })->name('nilai');

// });
//{{ END }}


//{{ Start }}
// INI FILE JAWABAN UTS
// Route::prefix('mahasiswa')->group(function () {

//     Route::get('pendaftaran', function () {
//         $title = 'Pendaftaran';
//         $text = 'Halaman Pendaftaran Mahasiswa';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('ujian', function () {
//         $title = 'ujidasan';
//         $text = 'Halaman Ujian Mahasiswa';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

//     Route::get('nilai', function () {
//         $title = 'Nilai';
//         $text = 'Halaman Nilai Mahasiswa';

//         return view('mahasiswa.index', compact('title', 'text'));
//     });

// });
// {{ END }}









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
