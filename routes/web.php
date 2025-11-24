<?php

use App\Http\Controllers\XmlController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaminhaoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/data-xml', [XmlController::class, 'gerarXML'])
    ->middleware(['auth', 'verified'])
    ->name('data-xml');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cadastrar', [CaminhaoController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('cadastrar');

Route::post('/cadastrar', [CaminhaoController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('cadastrar.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
