@extends('layout.app') 
 @section('title', 'Edit Produk') 
  
 @section('content') 
 <div class="row mt-4"> 
     <div class="col-md-8 mx-auto"> 
         <div class="card shadow-sm border-warning"> 
             <div class="card-header bg-warning text-dark"> 
                 <h4 class="mb-0">Edit Produk: {{ $produk->nama_produk }}</h4> 
             </div> 
             <div class="card-body"> 
                 <form action="/produk/{{ $produk->id }}" method="POST" enctype="multipart/form-data"> 
                     @csrf 
                     @method('PUT') 
                     
                     <div class="mb-3"> 
                         <label class="form-label">Nama Produk</label> 
                         <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control" required> 
                     </div> 
                     
                     <div class="mb-3"> 
                         <label class="form-label">Harga (Rp)</label> 
                         <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control" required> 
                     </div> 
                     
                     <div class="mb-3"> 
                         <label class="form-label">Deskripsi</label> 
                         <textarea name="deskripsi" class="form-control" rows="3">{{ $produk->deskripsi }}</textarea> 
                     </div> 
                     
                     <div class="mb-3"> 
                         <label class="form-label">Stok Awal</label> 
                         <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control"> 
                     </div> 

                     <!-- Upload Gambar --> 
                     <div class="mb-3"> 
                         <label class="form-label">Upload Foto Produk (Opsional)</label> 
                         @if($produk->gambar) 
                             <div class="mb-2"> 
                                 <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Foto {{ $produk->nama_produk }}" style="height: 100px; object-fit: cover;" class="border rounded"> 
                                 <small class="d-block text-muted">Foto saat ini. Upload foto baru untuk menggantinya.</small> 
                             </div> 
                         @endif 
                         <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*"> 
                         <div class="form-text">Format yang diizinkan: JPG, JPEG, PNG. Ukuran maksimal: 2MB.</div> 
                         @error('gambar') 
                             <div class="invalid-feedback">{{ $message }}</div> 
                         @enderror 
                     </div> 
                     
                     <button type="submit" class="btn btn-warning text-dark fw-bold">Simpan Perubahan</button> 
                     <a href="/produk" class="btn btn-secondary">Batal</a> 
                 </form> 
             </div> 
         </div> 
     </div> 
 </div> 
 @endsection
