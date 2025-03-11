<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//bagian yang belum login
Route::get('/index', [IndexControlle::class, 'index'])->name('index');

//Bagian member
Route::get('/member/home', [HomeController::class, 'home'])->name('member.home');

//bagian admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


// Cia kamu yang ngertikan yang nyambungin route tuh aku ga paham jadi kamu aja yah😁😁