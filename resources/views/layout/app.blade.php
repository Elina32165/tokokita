<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield('title') - TokoKita</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                </ul> 
                
                <ul class="navbar-nav ms-auto align-items-lg-center"> 
                    @auth 
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle fw-bold text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
                                Halo, {{ Auth::user()->name }} 
                            </a> 
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> 
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
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</body> 
</html>