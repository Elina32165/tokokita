@extends('layout.app') 
 @section('title', 'Daftar Produk') 
  
 @section('content') 
     <!-- Header Halaman dan Tombol --> 
    <div class="d-flex justify-content-between align-items-center mb-4 pt-3">
    <h2 class="fw-bold mb-0">Daftar Produk Tersedia</h2>
    <div>
        @can('isAdmin')
        <a href="/produk/cetak-pdf" class="btn btn-danger fw-bold px-3 py-2 me-2">
            <i class="bi bi-file-pdf"></i> Ekspor PDF
        </a>
        <a href="/produk/create" class="btn btn-primary fw-bold px-4 py-2">Tambah Produk Baru</a>
        @endcan
    </div>
</div> 
  
     <!-- Grid Produk --> 
     <div class="row"> 
         <!-- Looping data produk menggunakan Card Bootstrap --> 
         @foreach($data_produk as $item) 
             <div class="col-md-4 mb-4"> 
                 <div class="card h-100 shadow-sm"> 
                     <!-- LOGIKA PENAMPILAN GAMBAR --> 
                     @if($item->gambar) 
                         <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->nama_produk }}" style="height: 200px; object-fit: cover;"> 
                     @else 
                         <img src="https://via.placeholder.com/300x200?text=Tidak+Ada+Foto" class="card-img-top" alt="No Image" style="height: 200px; object-fit: cover;"> 
                     @endif 
                     <div class="card-body"> 
                         <!-- Informasi Produk --> 
                         <h5 class="card-title fw-bold">{{ $item->nama_produk }}</h5> 
                         <h6 class="card-subtitle mb-3 text-primary">Rp {{ number_format($item->harga, 0, ',', '.') }}</h6> 
                         <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($item->deskripsi, 50) }}</p> 
                          
                         <!-- Kondisi Stok --> 
                         @if($item->stok > 0) 
                             <p class="card-text text-success mb-2 fw-semibold">Stok: {{ $item->stok }} Tersedia</p> 
                         @else 
                             <p class="card-text text-danger mb-2 fw-semibold">Stok Habis</p> 
                         @endif 
                           <!-- Tombol Aksi Edit dan Hapus (Hanya untuk Admin) --> 
                           @can('isAdmin') 
                          <div class="mt-4 pt-3 border-top d-flex justify-content-between align-items-center"> 
                               
                              <!-- Tombol Edit (Boleh menggunakan Link biasa karena method GET) --> 
                              <a href="/produk/{{ $item->id }}/edit" class="btn btn-sm btn-outline-warning w-50 me-2"> 
                                  Edit 
                              </a> 
                               
                              <!-- Tombol Hapus (WAJIB menggunakan Form) --> 
                              <form action="/produk/{{ $item->id }}" method="POST" class="w-50" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');"> 
                                  @csrf 
                                  @method('DELETE') 
                                  <button type="submit" class="btn btn-sm btn-outline-danger w-100"> 
                                      Hapus 
                                  </button> 
                              </form> 

                          </div> 
                          @endcan 
                     </div> 
                 </div> 
             </div> 
         @endforeach 
     </div> 
 @endsection 
