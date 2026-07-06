<?php

use Illuminate\Support\Facades\Route;
// IMPORT CONTROLLER DI SINI 
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesananController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/halo', function() {
//     return 'Halo selamat datang di laravel 12';
// });
// Route::get('/tentang', function () {     
//     return 'Ini adalah halaman tentang kami'; 
// });
//  Route::get('/mahasiswa/{id}', function ($id) { 
//     return "Anda sedang melihat data mahasiswa dengan id : " . $id; 
// }); 
//  Route::get('/produk/{kategori}/{merk}', function ($kategori, $merk) {   
//     return "Kategori Produk: " . $kategori . " <br> Merk: " 
// . $merk;
//  }); 

//  Route:: get ('/salam/{nama?}', function ($nama = 'Pengunjung') {    
//     return "Halo " . $nama . "!";
//  });

 // MENGHUBUNGKAN ROUTE KE CONTROLLER
  // Format : Route::get('url', [NamaController::class, 'nama_method']); 
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']); 
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']); 
    Route::get('/data-mahasiswa', [MahasiswaController::class, 'data']); 

    Route::get('/buku', [BukuController::class, 'index']); 
    Route::get('/buku/{id}', [BukuController::class, 'show']);
    Route::get('/buku/kategori/{genre}', [BukuController::class, 'kategori']);

    
    Route::get('/tentang', [TentangController::class, 'index']);

    // RUTE PUBLIK (Bisa diakses siapa saja tanpa login) 
    Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index'); 
  
    // RUTE KHUSUS ADMIN (Wajib Login + Role Admin)
    Route::middleware(['auth', 'role:admin'])->group(function () { 
        Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create'); 
        Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store'); 
        Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']); 
        Route::put('/produk/{id}', [ProdukController::class, 'update']); 
        Route::delete('/produk/{id}', [ProdukController::class, 'destroy']); 
        Route::get('/produk/cetak-pdf', [ProdukController::class, 'cetakPdf']); 
    });

    // Rute untuk tamu (Guest)
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);

    // Rute logout harus menggunakan POST demi keamanan (mencegah CSRF Logout)
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk Pelanggan (Customer)
Route::middleware('auth')->group(function () {
    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan', [PesananController::class, 'store']);
});

// Rute khusus untuk Administrator
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pesanan', [PesananController::class, 'adminIndex']);
    Route::put('/admin/pesanan/{id}', [PesananController::class, 'updateStatus']);
});