<?php
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('data-pegawai', [PegawaiController::class, 'index'])->name('data-pegawai');
Route::get('create-pegawai', [PegawaiController::class, 'create'])->name('create-pegawai');
Route::post('simpan-pegawai', [PegawaiController::class, 'store'])->name('simpan-pegawai');