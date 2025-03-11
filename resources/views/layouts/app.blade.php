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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">📚 Perpustakaan Cahaya Ilmu - Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.buku') }}"><i class="fas fa-book"></i> Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.anggota') }}"><i class="fas fa-users"></i> Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.peminjaman') }}"><i class="fas fa-book-reader"></i> Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.pengembalian') }}"><i class="fas fa-undo-alt"></i> Pengembalian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.laporan') }}"><i class="fas fa-chart-bar"></i> Laporan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-warning" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle"></i> Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profil</a></li>
                        <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Konten -->
<main class="py-4">
    @yield('content')
</main>

    <!-- Bootstrap Bundle JS (Popper + Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
