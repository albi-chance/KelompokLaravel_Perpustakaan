<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = ['category_name'];

    //public function buku () ->
    //Mendefinisikan relasi One-to-Many (satu kategori punya banyak buku)
    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}