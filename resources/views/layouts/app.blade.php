<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan Cahaya Ilmu</title>
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        /* Styling Navbar */
        .navbar {
            background: #ffffff; /* Warna soft */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1px;
            color: #007bff !important; /* Biru soft */
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            width: 55px; 
            height: 55px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        /* Styling Link Navbar */
        .navbar-nav .nav-link {
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            color: #333 !important;
            transition: color 0.3s ease-in-out;
            padding: 8px 15px;
        }

        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: #007bff !important;
        }

        /* Footer */
        footer {
            background: #2c3e50; /* Biru gelap */
            color: white;
            padding: 15px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo">
            Perpustakaan Cahaya Ilmu
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('buku') ? 'active' : '' }}" href="#">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}" href="#">Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Konten -->
<main class="py-4">
    @yield('content')
</main>

<!-- Footer -->
<footer class="footer mt-5 py-4 text-white" style="background: #2c3e50;">
    <div class="container">
        <div class="row">
            <!-- Tentang Perpustakaan -->
            <div class="col-md-4">
                <h5 class="fw-bold">Perpustakaan Cahaya Ilmu</h5>
                <p class="small">Tempat terbaik untuk menemukan ilmu dan wawasan baru. Kami menyediakan berbagai koleksi buku untuk semua kalangan.</p>
            </div>

            <!-- Navigasi Cepat -->
            <div class="col-md-4">
                <h5 class="fw-bold">Navigasi</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white text-decoration-none footer-link">Beranda</a></li>
                    <li><a href="#" class="text-white text-decoration-none footer-link">Buku</a></li>
                    <li><a href="#" class="text-white text-decoration-none footer-link">Tentang</a></li>
                    <li><a href="#" class="text-white text-decoration-none footer-link">Kontak</a></li>
                </ul>
            </div>

            <!-- Kontak & Sosial Media -->
            <div class="col-md-4">
                <h5 class="fw-bold">Kontak</h5>
                <p class="small"><i class="bi bi-envelope"></i> info@perpustakaancahayailmu.com</p>
                <p class="small"><i class="bi bi-telephone"></i> +62 895 3411 11415</p>
                <p class="small"><i class="bi bi-geo-alt"></i> Jl. Perjuangan, Sunyaragi, Kesambi, Kota Cirebon, Jawa Barat</p>
                <div class="mt-3">
                    <a href="#" class="text-white me-3 social-icon"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white me-3 social-icon"><i class="bi bi-twitter fs-5"></i></a>
                    <a href="#" class="text-white social-icon"><i class="bi bi-instagram fs-5"></i></a>
                </div>
            </div>
        </div>

        <hr class="border-light">

        <!-- Copyright -->
        <div class="text-center">
            <p class="mb-0">&copy; 2025 Perpustakaan Cahaya Ilmu. Semua hak dilindungi.</p>
        </div>
    </div>
</footer>

<!-- CSS Custom -->
<style>
    .footer-link {
        transition: color 0.3s ease-in-out;
    }
    .footer-link:hover {
        color: #f39c12 !important;
        text-decoration: underline;
    }
    .social-icon {
        transition: transform 0.3s ease-in-out;
    }
    .social-icon:hover {
        transform: scale(1.2);
        color: #f39c12 !important;
    }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
