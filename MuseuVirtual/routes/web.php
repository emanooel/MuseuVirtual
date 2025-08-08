<?php

use App\Http\Controllers\FotosController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\JazidaController;
use App\Http\Controllers\MineralController;
use App\Http\Controllers\EraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RochaController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboardPublica', function () {
    return Inertia::render('DashboardPublica');
})->middleware(['auth', 'verified'])->name('dashboardPublica');

Route::get('/timeline', function () {
    return Inertia::render('Dashboard/Timeline/Timeline');
})->middleware(['auth', 'verified'])->name('Timeline');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard/rocha', [RochaController::class, 'index'])->name('rochas.index');

Route::resource('rochas', RochaController::class)->names('Rocha');

Route::resource('/jazidas', JazidaController::class)->middleware(['auth', 'verified']);
Route::resource('/minerais', MineralController::class);
Route::get('/api/jazidas', [JazidaController::class, 'apiListJazidas']);

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

// Route::get('/emanoel', function(){
//     return view("emanoel");
// });

Route::post('/upload', [ImageUploadController::class, 'upload'])->name('image.upload');
Route::get('/image-picker/{type?}', [ImageUploadController::class, 'picker'])->name('image.picker');

Route::fallback(function() {
    return json_encode("Erro, favor não colocar / como caminho para não gerar conflitos. Obrigado :)");
});

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/rochas', [RochaController::class,'index'])->name('rochas.index');
    Route::get('/fotos', [FotosController::class,'index'])->name('fotos.index');
    Route::get('/jazidas', [JazidaController::class,'index'])->name('jazidas.index');
    Route::get('/minerais', [MineralController::class,'index'])->name('minerais.index');
    Route::get('/timeline', [EraController::class,'index'])->name('timeline.index');
});

require __DIR__.'/auth.php';
