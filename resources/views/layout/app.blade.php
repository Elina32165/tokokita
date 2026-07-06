<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield('title') - TokoKita</title> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 
<body class="bg-light"> 
      
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"> 
        <div class="container"> 
            <a class="navbar-brand" href="/">TokoKita</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 
            
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav me-auto"> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="/produk">Produk</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="/tentang">Tentang</a> 
                    </li> 
                    @auth 
                    <li class="nav-item"> 
                        <a class="nav-link" href="/pesanan">Pesanan Saya</a> 
                    </li> 
                    @can('isAdmin') 
                    <li class="nav-item"> 
                        <a class="nav-link" href="/admin/pesanan">Kelola Pesanan</a> 
                    </li> 
                    @endcan 
                    @endauth 
                </ul> 
                
                <ul class="navbar-nav ms-auto align-items-lg-center"> 
                    @auth 
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle fw-bold text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                                Halo, {{ Auth::user()->name }} 
                            </a> 
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> 
                                <li> 
                                    <a class="dropdown-item" href="/tentang"> 
                                        <i class="bi bi-info-circle me-2"></i>Tentang 
                                    </a> 
                                </li> 
                                @can('isAdmin') 
                                <li> 
                                    <a class="dropdown-item" href="/admin/pesanan"> 
                                        <i class="bi bi-clipboard-data me-2"></i>Kelola Pesanan 
                                    </a> 
                                </li> 
                                @endcan 
                                <li><hr class="dropdown-divider"></li> 
                                <li> 
                                    <form action="/logout" method="POST" class="m-0"> 
                                        @csrf 
                                        <button type="submit" class="dropdown-item text-danger"> 
                                            <i class="bi bi-box-arrow-right me-2"></i>Logout 
                                        </button> 
                                    </form> 
                                </li> 
                            </ul> 
                        </li> 
                    @else 
                        <li class="nav-item"> 
                            <a class="nav-link text-white fw-bold" href="/login">Login</a> 
                        </li> 
                    @endauth 
                </ul> 
            </div> 
        </div> 
    </nav> 
  
    <main class="container mt-5 pt-5"> 
               
        @if(session('success')) 
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert"> 
                <strong><i class="bi bi-check-circle-fill me-2"></i>Berhasil!</strong> {{ session('success') }} 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>     
            </div> 
        @endif 

        @yield('content') 
          
    </main> 
  
    <footer class="text-center p-4 mt-5 text-muted border-top"> 
        &copy; {{ date('Y') }} TokoKita. Hak Cipta Dilindungi. 
    </footer> 
  
    <!-- Semua script sudah dibundel oleh Vite -->
</body> 
</html>