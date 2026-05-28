<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    //index
    public function index() {
        return "Selamat datang di Katalog Buku Utama .";
    }
    // detail
    public function show($id) {
        return "Anda sedang melihat detail buku dengan ID: " . $id;
    }
    // kategori
     public function kategori($genre)
    {
        // Mengembalikan teks dengan menyisipkan variabel $genre
        return "Menampilkan daftar buku dengan kategori: " . $genre;
    }
}
