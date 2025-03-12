@extends('layouts.app')

@section('content')
<style>
        body {
            background-color: #f8f9fa;
        }

        .header {
            background: linear-gradient(to right, #007bff, #004085);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .book-card {
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%; /* Biar semua card sama tinggi */
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .book-card img {
            height: 180px; /* Ukuran gambar tetap */
            object-fit: contain;
            background: #f0f0f0;
            padding: 10px;
        }

        .card-body {
            min-height: 120px; /* Biar tinggi card tetap seragam */
        }

        .desc {
            font-size: 14px;
            color: #555;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Maksimal 3 baris */
            -webkit-box-orient: vertical;
        }
    </style>
<div class="header">📚 Koleksi Buku Perpustakaan 📚</div>

    <div class="container">
        <div class="row">
            <!-- Buku 1 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card book-card shadow-sm rounded">
                    <img src="buku 1.jpg" class="card-img-top" alt="Buku 1">
                    <div class="card-body text-center">
                        <h5 class="text-primary">Buku Judul 1</h5>
                        <p class="desc">
                            Panduan lengkap belajar coding untuk pemula yang ingin memahami dasar-dasar pemrograman dan mengembangkan keterampilan mereka.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-transparent">
                        <a href="#" class="btn btn-primary">Detail</a>
                        <small class="text-muted">Januari 2025</small>
                    </div>
                </div>
            </div>

            <!-- Buku 2 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card book-card shadow-sm rounded">
                    <img src="buku 1.jpg" class="card-img-top" alt="Buku 2">
                    <div class="card-body text-center">
                        <h5 class="text-primary">Buku Judul 2</h5>
                        <p class="desc">
                            Menjelajahi dunia sastra klasik dan modern dengan sudut pandang yang unik serta menarik untuk pembaca dari berbagai kalangan.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-transparent">
                        <a href="#" class="btn btn-primary">Detail</a>
                        <small class="text-muted">Februari 2025</small>
                    </div>
                </div>
            </div>

            <!-- Buku 3 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card book-card shadow-sm rounded">
                    <img src="buku 1.jpg" class="card-img-top" alt="Buku 3">
                    <div class="card-body text-center">
                        <h5 class="text-primary">Buku Judul 3</h5>
                        <p class="desc">
                            Sejarah dan perjalanan peradaban manusia sejak zaman dahulu hingga masa kini, dengan berbagai perspektif yang menarik.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-transparent">
                        <a href="#" class="btn btn-primary">Detail</a>
                        <small class="text-muted">Maret 2025</small>
                    </div>
                </div>
            </div>

            <!-- Buku 4 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card book-card shadow-sm rounded">
                    <img src="buku 1.jpg" class="card-img-top" alt="Buku 4">
                    <div class="card-body text-center">
                        <h5 class="text-primary">Buku Judul 4</h5>
                        <p class="desc">
                            Buku ini membahas topik menarik dalam ilmu pengetahuan yang sangat luas dan mendalam, memberikan wawasan baru bagi pembaca.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center bg-transparent">
                        <a href="#" class="btn btn-primary">Detail</a>
                        <small class="text-muted">April 2025</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk memotong teks menjadi setengah -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const descElements = document.querySelectorAll(".desc");

            descElements.forEach(desc => {
                let words = desc.textContent.split(" ");
                let halfLength = Math.ceil(words.length / 2); // Ambil setengah kata

                if (words.length > 10) { // Biar nggak kepotong kalau pendek
                    desc.textContent = words.slice(0, halfLength).join(" ") + " ...";
                }
            });
        });
    </script>
@endsection