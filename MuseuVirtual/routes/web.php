<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RochaController;
use App\Http\Controllers\MineralController;
use App\Http\Controllers\JazidaController;
use App\Http\Controllers\FotosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/rocha', [RochaController::class, 'index'])->name('rochas.index');
Route::resource('rochas', RochaController::class)->names('Rocha');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rota Jazidas:
Route::resource('/jazidas', JazidaController::class)->middleware(['auth', 'verified']);
Route::resource('/minerais', MineralController::class);

// Rota Fotos:
Route::prefix('fotos')->group(function(){
    Route::get('/', [FotosController::class, 'index'])->name('fotos-index');
    Route::get('/create', [FotosController::class, 'create'])->name('fotos-create');
    Route::post('/', [FotosController::class, 'store'])->name('fotos-store');
    Route::get('/{id}/edit', [FotosController::class, 'edit'])->name('fotos-edit');
    Route::put('/{id}', [FotosController::class, 'update'])->name('fotos-update');
    Route::delete('/{id}', [FotosController::class, 'destroy'])->name('fotos-destroy');
});

Route::fallback(function(){
    return "Erro, favor não colocar / como caminho para não gerar conflitos. Obrigado :)";
});
