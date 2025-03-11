<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Bagian member
Route::get('/home', [HomeController::class, 'index'])->name('home');


//bagian admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


//bagian yang belum login
Route::get('/index', [IndexControlle::class, 'home'])->name('index');

// Cia kamu yang ngertikan yang nyambungin route tuh aku ga paham jadi kamu aja yah😁😁