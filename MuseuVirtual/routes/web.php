<?php

use App\Http\Controllers\FotosController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\JazidaController;
use App\Http\Controllers\MineralController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RochaController;
use App\Http\Controllers\SiteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;

Route::get("/", [SiteController::class, 'home'])->name("home");
Route::get("/site/jazidas", [JazidaController::class, 'site'])->name("site.jazidas");
Route::get("/site/minerais", [MineralController::class, 'site'])->name("site.minerais");
Route::get("/site/rochas/tipo/{tipo}", [RochaController::class, 'site_tipo_rocha'])->name("site.rochas.tipo");

Route::get("/site/rochas", [RochaController::class, 'site'])->name("site.rochas");
Route::get("/api/rochas", [RochaController::class, 'apiListRocha']);


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard/rocha', [RochaController::class, 'index'])->name('rochas.index');
Route::resource('rochas', RochaController::class)->names('Rocha');

Route::resource('/jazidas', JazidaController::class)->middleware(['auth', 'verified']);
Route::resource('/minerais', MineralController::class);

Route::prefix('fotos')->group(function() {
    Route::get('/', [FotosController::class, 'index'])->name('fotos-index');
    Route::get('/create', [FotosController::class, 'create'])->name('fotos-create');
    Route::post('/', [FotosController::class, 'store'])->name('fotos-store');
    Route::get('/{id}/edit', [FotosController::class, 'edit'])->name('fotos-edit');
    Route::put('/{id}', [FotosController::class, 'update'])->name('fotos-update');
    Route::delete('/{id}', [FotosController::class, 'destroy'])->name('fotos-destroy');

    // Rota única para salvar/criar/atualizar/deletar todas as anotações
    Route::post('/{foto}/anotacoes', [FotosController::class, 'salvarAnotacoes'])->name('fotos.anotacoes.store');
});

Route::post('/upload', [ImageUploadController::class, 'upload'])->name('image.upload');
Route::get('/image-picker/{type?}', [ImageUploadController::class, 'picker'])->name('image.picker');

Route::fallback(function() {
    return json_encode("Erro, favor não colocar / como caminho para não gerar conflitos. Obrigado :)");
});

require __DIR__.'/auth.php';
