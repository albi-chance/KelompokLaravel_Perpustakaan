<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan Cahaya Ilmu</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand" href="#">📚 Perpustakaan Cahaya Ilmu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home"></i> Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-book"></i> Daftar Buku</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-info-circle"></i> Tentang</a></li>

                <!-- Hanya tampil jika user belum login -->
                <li class="nav-item"><a class="nav-link btn btn-warning text-dark ms-2" href="#"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <li class="nav-item"><a class="nav-link btn btn-light text-dark ms-2" href="#"><i class="fas fa-user-plus"></i> Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Konten -->
<div class="container mt-4">
    @yield('content')
</div>

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
        color: #eaeaea !important;
        text-decoration: underline;
    }
    .social-icon {
        transition: transform 0.3s ease-in-out;
    }
    .social-icon:hover {
        transform: scale(1.2);
        color: #333 !important;
    }
</style>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
