<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicController;
Route::resource('musicas', MusicController::class ) ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [MusicController::class, 'show'])->defaults('musica', 'unused')->defaults('tipo', 'preview')->name('hello');

Route::get('/musicas/{musica}/{tipo?}', [MusicController::class, 'show'])->name('musicas.show');

Route::get('/AddMusic', function () {
    $nome = 'admin';
    return view('admin', ['nome' => $nome]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
