<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['judul', 'penulis', 'sinopsis', 'penerbit', 'tahun_terbit', 'jumlah_halaman', 'harga', 'stok', 'id_kategori'];

    //relasi one to many
    public function kategori() {
        return $this->belongsTo(Category::class, 'id_kategori', 'id');
    }
    //relasi one to many
    public function pinjaman() {
        return $this->belongsTo(Category::class, 'id_pinjaman', 'id');
    }
}
