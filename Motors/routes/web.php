<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lojaController;
use App\Http\Controllers\AdminCOntroller;

Route::get('/', [LojaController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/veiculos', [AdminCOntroller::class, 'index'])->name('admin.veiculos');

    Route::get('/deletar-veiculo/{id}', [AdminController::class, 'deletar'])->name('admin.deletar-veiculo');
    
    Route::get('/editar-veiculo/{id}', [AdminCOntroller::class, 'editar'])->name('admin.editar-veiculo');

    Route::put('/salvar/{id}', [AdminController::class, 'salvar'])->name('admin.salvar-edicao');

    Route::get('/cadastro-veiculo', [AdminController::class, 'create'])->name('admin.cadastro-veiculo');

    Route::post('/cadastro-veiculo', [AdminController::class, 'cadastrarSalvar'])->name('admin.salvar-veiculo');

});

require __DIR__.'/auth.php';


Route::prefix('loja')->group(function(){
    Route::get('/menu', [LojaController::class, 'index'])->name('loja.menu');
    Route::get('/marca/{marca}', [LojaController::class, 'perMarca'])->name('loja.marca');
    Route::get('/carro/{id}', [LojaController::class, 'carroUnico'])->name('loja.produto');
});