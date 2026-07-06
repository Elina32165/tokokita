@extends('layout.app')
@section('title', 'Tentang')

@section('content')
<div class="bg-primary py-4">
    <div class="container text-center py-3">
        <h1 class="fw-bold text-white mb-1">Tentang</h1>
        <p class="text-white opacity-75 mb-0">Kenali TokoKita lebih dekat</p>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-0 bg-primary bg-opacity-10 h-100">
                <div class="card-body text-center p-4">
                    <i class="bi bi-box-seam text-primary fs-1 mb-3 d-block"></i>
                    <h5 class="fw-bold">50+ Produk</h5>
                    <p class="text-muted small mb-0">Beragam pilihan produk tersedia untuk Anda</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 bg-primary bg-opacity-10 h-100">
                <div class="card-body text-center p-4">
                    <i class="bi bi-people text-primary fs-1 mb-3 d-block"></i>
                    <h5 class="fw-bold">100+ Pelanggan</h5>
                    <p class="text-muted small mb-0">Telah dipercaya oleh pelanggan setia</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 bg-primary bg-opacity-10 h-100">
                <div class="card-body text-center p-4">
                    <i class="bi bi-hand-thumbs-up text-primary fs-1 mb-3 d-block"></i>
                    <h5 class="fw-bold">100% Ramah</h5>
                    <p class="text-muted small mb-0">Pelayanan terbaik untuk setiap pelanggan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-6">
            <h2 class="fw-bold mb-3">Siapa <span class="text-primary">Kami?</span></h2>
            <p class="text-muted lh-lg mb-4">TokoKita adalah platform e-commerce sederhana yang dibangun dengan Laravel dan Bootstrap. Kami berkomitmen memberikan pengalaman belanja online yang mudah, cepat, dan terpercaya bagi semua pelanggan.</p>
            <a href="/produk" class="btn btn-primary px-4">Lihat Produk</a>
        </div>
        <div class="col-lg-6">
            <div class="bg-light rounded-4 p-4">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="bg-white rounded-3 p-3 text-center">
                            <i class="bi bi-shield-check text-success fs-3 mb-2 d-block"></i>
                            <h6 class="fw-bold small mb-0">Kualitas</h6>
                            <small class="text-muted">Terjamin</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white rounded-3 p-3 text-center">
                            <i class="bi bi-wallet2 text-primary fs-3 mb-2 d-block"></i>
                            <h6 class="fw-bold small mb-0">Harga</h6>
                            <small class="text-muted">Bersahabat</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white rounded-3 p-3 text-center">
                            <i class="bi bi-headset text-warning fs-3 mb-2 d-block"></i>
                            <h6 class="fw-bold small mb-0">Layanan</h6>
                            <small class="text-muted">24/7</small>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-white rounded-3 p-3 text-center">
                            <i class="bi bi-truck text-info fs-3 mb-2 d-block"></i>
                            <h6 class="fw-bold small mb-0">Pengiriman</h6>
                            <small class="text-muted">Cepat</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light rounded-4 p-5 mb-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-1">Tim <span class="text-primary">Kami</span></h2>
            <p class="text-muted">Orang di balik TokoKita</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mx-auto mb-3 bg-primary text-white d-flex align-items-center justify-content-center rounded-circle fw-bold fs-3" style="width: 88px; height: 88px;">E</div>
                        <h5 class="fw-bold mb-1">Elina Yulianti Meha</h5>
                        <p class="text-primary small mb-0">Web Developer & Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-5">
        <h2 class="fw-bold mb-1">Teknologi <span class="text-primary">Kami</span></h2>
        <p class="text-muted mb-4">Stack yang digunakan</p>
        <div class="d-flex gap-2 justify-content-center flex-wrap">
            <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-2 rounded-1 fw-semibold">Laravel</span>
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-1 fw-semibold">Bootstrap 5</span>
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-1 fw-semibold">MySQL</span>
            <span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2 rounded-1 fw-semibold">Vite</span>
            <span class="badge bg-info bg-opacity-10 text-info px-3 py-2 rounded-1 fw-semibold">JavaScript</span>
        </div>
    </div>
</div>

<div class="bg-primary py-5">
    <div class="container text-center">
        <h3 class="text-white fw-bold mb-2">Mulai Belanja</h3>
        <p class="text-white opacity-75 mb-4">Temukan kebutuhan Anda di TokoKita</p>
        <a href="/produk" class="btn btn-light fw-semibold px-5">Lihat Produk</a>
    </div>
</div>
@endsection
