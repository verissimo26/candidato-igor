<?php

use App\Http\Controllers\CadastroCliente;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('cadastro')->group(function(){
    Route::get('/',[CadastroCliente::class, 'index'])->name('cadastro-cliente');
    Route::get('/create',[CadastroCliente::class, 'create'])->name('cadastro-create');
    Route::post('/',[CadastroCliente::class, 'store'])->name('cadastro-store');
    Route::get('/{id}/edit',[CadastroCliente::class, 'edit'])->where('id', '[0-9]+')->name('cadastro-edit');
    Route::put('/{id}',[CadastroCliente::class, 'update'])->where('id', '[0-9]+')->name('cadastro-update');
});



Route::fallback(function(){
    return "Ops pagina não encontrada";
});

require __DIR__.'/auth.php';
