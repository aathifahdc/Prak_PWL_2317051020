<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;


Route::get('/', function () {
    return view('welcome');
});

// ------------------ ROUTE USER ------------------
Route::get('/user', [UserController::class, 'index'])->name('list_user');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{uuid}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{uuid}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/delete/{uuid}', [UserController::class, 'destroy'])->name('user.destroy');

// ------------------ ROUTE MATA KULIAH ------------------

Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');
Route::get('/matakuliah/{id}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/matakuliah/{id}', [MataKuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/matakuliah/{id}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');